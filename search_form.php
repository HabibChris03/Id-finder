<?php
$servername = "localhost";
$username = "root"; // Default XAMPP username
$password = ""; // Default XAMPP password
$dbname = "documents";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST['fullName'];
    $cardType = $_POST['cardType'];
    $cardNumber = $_POST['cardNumber'];

    // SQL query to search for matching documents
    $sql = "SELECT * FROM found_documents WHERE cardName LIKE '%$fullName%' AND cardType = '$cardType' AND cardNumber = '$cardNumber'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>Search Results:</h2>";
        echo "<div style='display: flex; flex-wrap: wrap;'>"; // Container for flex items
        while ($row = $result->fetch_assoc()) {
            echo "<div style='border: 1px solid #ccc; padding: 10px; margin: 10px; width: calc(33% - 40px); box-sizing: border-box;'>";
            echo "Card Name: " . $row["cardName"] . "<br>";
            echo "Your Name: " . $row["yourName"] . "<br>";
            echo "Card Type: " . $row["cardType"] . "<br>";
            echo "Card Number: " . $row["cardNumber"] . "<br>";
            echo "Location: " . $row["location"] . "<br>";
            echo "Date: " . $row["date"] . "<br>";
            echo "Phone: " . $row["phone"] . "<br>";
            echo "Email: " . $row["email"] . "<br>";
            echo "</div>";
        }
        echo "</div>";
    } else {
        echo "No results found.";
    }
}

$conn->close();
?>