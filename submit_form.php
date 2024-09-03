<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cardName = $_POST['cardName'];
    $yourName = $_POST['yourName'];
    $cardType = $_POST['cardType'];
    $cardNumber = $_POST['cardNumber'];
    $location = $_POST['location'];
    $date = $_POST['date'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    // Handle file upload
    if (isset($_FILES['cardImage']) && $_FILES['cardImage']['error'] == 0) {
        $uploadDir = 'uploads/';
        $uploadFile = $uploadDir . basename($_FILES['cardImage']['name']);
        
        if (move_uploaded_file($_FILES['cardImage']['tmp_name'], $uploadFile)) {
            echo "File is valid and was successfully uploaded.\n";
        } else {
            echo "File upload failed!\n";
        }
    }

    echo "<h2>Your Input:</h2>";
    echo "Card Name: " . $cardName . "<br>";
    echo "Your Name: " . $yourName . "<br>";
    echo "Card Type: " . $cardType . "<br>";
    echo "Card Number: " . $cardNumber . "<br>";
    echo "Location: " . $location . "<br>";
    echo "Date: " . $date . "<br>";
    echo "Phone: " . $phone . "<br>";
    echo "Email: " . $email . "<br>";
}
?>