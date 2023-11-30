<?php
$servername = "localhost";
$username = "seniorTest";
$password = "password";
$dbname = "seniortest";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$fname = $_POST['firstname'];
$sname = $_POST['surname'];

$sql = "INSERT INTO students (forename, surname, class, dob, house, year)
VALUES ('$fname', '$sname', '6','1987-01-01', 'Ravelrig', '90')";

if ($conn->query($sql) === TRUE) {
    echo "<h1>New record created successfully</h1>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
