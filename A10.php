<?php
$originalArray = array("apple", "banana", "mango", "grapes");
echo "Orginal Array <br>";
print_r($originalArray);
$newItem = "orange";
$insertPosition = 2;
echo "<br> Inserting 
$newItem at position $insertPosition <br>";
array_splice($originalArray, $insertPosition, 0, $newItem);
echo
    "Updated Array:<br>";
print_r($originalArray);