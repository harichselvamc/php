<!DOCTYPE html>
<html>
<head>
    <title>Insert Data</title>
    <style>
        form, input {
            padding: 10px;
            margin: 10px;
        }
    </style>
</head>
<body>
    <h2>Insert Data</h2>
    <form action="Main.php" method="POST">
        <input type="text" name="Name" placeholder="Name"><br>
        <input type="email" name="Email" placeholder="Email"><br>
        <input type="text" name="Mobile" placeholder="Mobile Number"><br>
        <input type="text" name="Department" placeholder="Department"><br>
        <input type="submit" name="submit" value="Submit"> <!-- Added value attribute -->
    </form>
    <!-- Added a line for clarity -->
    <p>Ex.No : 11 INSERTING RECORD INTO A TABLE USING PHP/MySQL Date: 25</p>
</body>
</html>
