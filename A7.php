<html>

<head>
    <title>Reverse</title>
</head>

<body>
    <form method="post"> Enter the number:
        <input type="number" name="number" />
        <input type="submit" value="submit" />
    </form>
    <?php if ($_POST) {
        $num = $_POST['number'];
        $sum = 0;
        $rev = 0;
        while (floor($num)) {
            $r = $num % 10;
            $rev = (($rev * 10) + $r);
            $sum = $sum + $r;
            $num = $num / 10;
        }
        echo "Reverse=$rev<br>";
        echo "sum=$sum";
    }
    ?>
</body>

</html>