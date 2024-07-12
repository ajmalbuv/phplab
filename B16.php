<?php
// Check if the form is submitted to add matrices
if (isset($_POST['addMatrices'])) {
    $rows = $_POST['rows'];
    $cols = $_POST['cols'];
    $matrixA = $_POST['matrixA'];
    $matrixB = $_POST['matrixB'];
    $resultMatrix = [];

    // Perform matrix addition
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $cols; $j++) {
            $resultMatrix[$i][$j] = $matrixA[$i][$j] + $matrixB[$i][$j];
        }
    }

    // Display the result 
    echo "<h3>Matrix A + Matrix B:</h3>";
    echo "<table border='1'>";
    for ($i = 0; $i < $rows; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $cols; $j++) {
            echo "<td>" . $resultMatrix[$i][$j] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    return; // Stop further processing to display result 
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Matrix Addition</title>
</head>

<body>
    <h3>Enter Matrix Dimensions</h3>
    <form method="post">
        Rows: <input type="number" name="rows" min="1" required>
        Columns: <input type="number" name="cols" min="1" required>
        <input type="submit" name="enterDimensions" value="Enter Matrix Elements">
    </form>

    <?php
    // Check if the form is submitted to enter matrix dimensions
    if (isset($_POST['enterDimensions'])) {
        $rows = $_POST['rows'];
        $cols = $_POST['cols'];
        echo "<h1>Enter Matrices</h1>";
        echo "<form method='post'>";
        echo "<input type='hidden' name='rows' value='$rows'>";
        echo "<input type='hidden' name='cols' value='$cols'>";

        // Generate inputs for Matrix A 
        echo "<h3>Matrix A</h3>";
        for ($i = 0; $i < $rows; $i++) {
            for ($j = 0; $j < $cols; $j++) {
                echo "<input type='number' name='matrixA[$i][$j]' required> ";
            }
            echo "<br>";
        }

        // Generate inputs for Matrix B 
        echo "<h3>Matrix B</h3>";
        for ($i = 0; $i < $rows; $i++) {
            for ($j = 0; $j < $cols; $j++) {
                echo "<input type='number' name='matrixB[$i][$j]' required> ";
            }
            echo "<br>";
        }
        echo "<br>";
        echo "<input type='submit' name='addMatrices' value='Add Matrices'>";
        echo "</form>";
    }
    ?>

</body>

</html>