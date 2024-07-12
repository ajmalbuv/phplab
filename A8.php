<?php function fibonacci($n)
{
    if ($n == 0) {
        return 0;
    } else if ($n == 1) {
        return 1;
    } else {
        return (fibonacci($n - 1) + fibonacci($n - 2));
    }
}
if (isset($_GET['n'])) {
    $n = $_GET['n'];
    if (is_numeric($n) && $n >= 0) {
        echo "Fibonacci series for n=$n:";
        for ($i = 0; $i < $n; $i++) {
            echo fibonacci($i) . " ";
        }
    } else {
        echo "please provide a valid non-negative numeric value for 'n'";
    }
} else {
    echo "please provide a value for 'n' in the URL 
parameter";
}
?>