<?php
$string = "I Like PHP Programming";
echo "Given String:$string<br/></br>";
//1.String Length 
$length = strlen($string);
echo "1.String length:$length<br/></br>";
//2.uppercase 
$uppercase = strtoupper($string);
echo
    "2.uppercase:$uppercase<br/></br>";
//3.lowercase 
$lowercase = strtolower($string);
echo
    "3.lowercase:$lowercase<br/></br>";
//4.Substring 
$substring = substr($string, 7);
echo "4.Substring from position 7:$substring<br/></br>";
//5.Replace 
$repalcestring = str_replace("Like", "Love", $string);
echo
    "5.Replace 'Like' with 'Love':$repalcestring</br></br>";
//6.Reverse 
$reversedstring = strrev($string);
echo "6.Reversed string:$reversedstring<br/></br>";
//7.word count 
$wordcount = str_word_count($string);
echo
    "7.Word count:$wordcount<br/></br></br>";
?>