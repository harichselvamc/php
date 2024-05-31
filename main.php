<?php
// Connect to MySQL server
$con = mysqli_connect('localhost', 'root', '');

// Check connection
if (!$con) {
    echo "Not Connected to server";
}

// Select database
if (!mysqli_select_db($con, 'computer')) {
    echo "Database is not selected";
}

// Retrieve form data
$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Mobile = $_POST['Mobile'];
$Department = $_POST['Department'];

// Insert data into table
$sql = "INSERT INTO student (Name, Email, Mobile, Department) VALUES ('$Name', '$Email', '$Mobile', '$Department')";

// Execute query
if (!mysqli_query($con, $sql)) {
    echo "Failed";
} else {
    echo "Passed";
}

// Redirect back to insert.php after 2 seconds
header("refresh:2; url=Insert.php");
?>
