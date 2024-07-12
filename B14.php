<!DOCTYPE html>
<html>

<head>
    <title> String Input Form</title>
</head>

<body>
    <h2> String Input Form</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?> ">
        <label for="inputString">Enter a String:</label></br>
        <input type="text" id="inputString" name="inputString"></br></br>
        <input type="submit" value="submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['inputString'])) {
        $inputString = $_POST['inputString'];
        echo "<p>You entered:$inputString</p>";
    }
    ?>
</body>

</html>