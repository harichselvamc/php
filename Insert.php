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
        <input type="text" name="Name" placeholder="Name" required><br>
        <input type="text" name="Place" placeholder="Place" required><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>
