<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Handling</title>
</head>
<body>
    <h1>Register</h1>
    <form method="post" action="welcome.php">
        <label for="fullname">Full Name:</label>
        <input type="text" name="fullname" id="fullname" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br>

        <input type="submit" name="submit" value="Register">
    </form>
</body>
</html>