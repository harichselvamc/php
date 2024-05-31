<!DOCTYPE html>
<html>
<head>
    <title>Registration Success</title>
</head>
<body>
    <h2>Registration Successful</h2>
    <?php
    // Check if form data is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve and display registered details
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];

        echo "<p>Name: $name</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Phone: $phone</p>";
    } else {
        echo "<p>No data submitted.</p>";
    }
    ?>
</body>
</html>
