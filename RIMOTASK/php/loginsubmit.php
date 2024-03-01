<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all form fields are set
    if (isset($_POST["username"]) && isset($_POST["phone"]) && isset($_POST["password"])) {
        // Retrieve form data
        $username = $_POST["username"];
        $phone = $_POST["phone"];
        $referral = isset($_POST["referral"]) ? $_POST["referral"] : "";
        $password = $_POST["password"];

        // Perform necessary validations
        // For example, you can validate username length, phone number format, etc.
        
        // Connect to the database (replace these values with your database credentials)
        $servername = "localhost";
        $db_username = "admin";
        $db_password = "admin1.password.A";
        $dbname = "datab";

        // Create connection
        $conn = new mysqli($servername, $db_username, $db_password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare SQL statement to insert data into the database
        $sql = "INSERT INTO users (username, phone, referral, password) VALUES ('$username', '$phone', '$referral', '$password')";

        // Execute the SQL statement
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close the database connection
        $conn->close();
    } else {
        echo "All fields are required.";
    }
}
?>
