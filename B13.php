<!DOCTYPE html>
<html>

<head>
    <title> Login Form </title>
</head>

<body>
    <h2>Login Form</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="username"> Username:</label><br>
        <input type="text" id="username" name="username"></br></br>
        <label for="password"> Password:</label><br>
        <input type="password" id="password" name="password"></br></br>
        <input type="submit" value="Login">
    </form>
    <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if ($username == "admin" && $password == "password") {
            echo "<p>Login successful. Welcome, $username!</p>";
        } else {
            echo "<p>Invalid username or password. Please try again.</p>";
        }
    }
    ?>
</body>

</html>