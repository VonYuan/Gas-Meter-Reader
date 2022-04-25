<?php
include ('connection.php');


$sql = "CREATE TABLE Report(
        uname VARCHAR (30),
        email VARCHAR (50),
        Date_Of_Report date,
        report text,
        address text
        )";

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>