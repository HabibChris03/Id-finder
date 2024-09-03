Basically the styling is not that Good but these is just my first project and am trying to solve a real world problem Where people missplace their ID cards and documents. IF you can participate with me you can get to me through my email
BanyuyHabibosti@gmail.com
Got a alot of projects we can do together


Report Found Document and Search Application

This project consists of two main components: a form to report a found document and a search functionality to look for missing documents. It is built using Html,CSS,javascript PHP and MySQL, intended to run on a local server environment like XAMPP.

 Prerequisites

- XAMPP (or any local server environment that supports PHP and MySQL)
- Web browser

 Setup Instructions

 Step 1: Install XAMPP

Download and install XAMPP from [Apache Friends](https://www.apachefriends.org/index.html).

 Step 2: Start XAMPP

Open the XAMPP Control Panel and start the Apache and MySQL services.

Step 3: Set Up the Database

1. Create the Database:
   - Open phpMyAdmin by navigating to `http://localhost/phpmyadmin`.
   - Create a new database named `documents`.

2. Create the Table:
   - Use the following SQL command to create the `found_documents` table:

   ```sql
   CREATE TABLE found_documents (
       id INT AUTO_INCREMENT PRIMARY KEY,
       cardName VARCHAR(255),
       yourName VARCHAR(255),
       cardType VARCHAR(100),
       cardNumber VARCHAR(100),
       location VARCHAR(255),
       date DATE,
       phone VARCHAR(20),
       email VARCHAR(255)
   );
   ```

 Step 4: Place Files in the XAMPP Directory

1. Navigate to the `htdocs` directory in your XAMPP installation folder.
2. Create a new folder named `found_document`.
3. Place `form.html`, `process.php`, `search.html`, and `search.php` inside the `found_document` folder.
4. Create an `uploads` directory within `found_document` for storing uploaded files.

Step 5: Access the Application

- Report Found Document Form:
  - Open a web browser and go to `http://localhost/found_document/form.html`.
  - Fill out the form and submit to report a found document.

- Search for Missing Document:
  - Open a web browser and go to `http://localhost/found_document/search.html`.
  - Fill out the search criteria and submit to find missing documents.

 Notes

- Ensure your database credentials in `search.php` match your XAMPP setup (default username is `root` with no password).
- Adjust the SQL queries in `process.php` and `search.php` to fit your specific needs and database structure.
- The application uses basic styling and layout; feel free to enhance the CSS and HTML.

 Troubleshooting

- Database Connection Issues:
  - Ensure MySQL is running in XAMPP.
  - Verify database credentials in the PHP files.
  
- File Upload Problems:
  - Ensure the `uploads` directory has appropriate permissions for file writing.

For further assistance, consult the XAMPP documentation or PHP/MySQL resources.
