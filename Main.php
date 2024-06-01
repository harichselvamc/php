<?php
// Connect to MySQL server and select database
$con = mysqli_connect('localhost', 'root', '', 'computer');

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connection successful.<br>";

// Retrieve form data
$Name = $_POST['Name'];
$Place = $_POST['Place'];

// Insert data into the table
$sql = "INSERT INTO student (Name, Place) VALUES ('$Name', '$Place')";

// Execute query
if (!mysqli_query($con, $sql)) {
    echo "Failed to insert data: " . mysqli_error($con);
} else {
    echo "Data inserted successfully.";
}

// Redirect back to insert.php after 2 seconds
header("refresh:2; url=Insert.php");
?>
