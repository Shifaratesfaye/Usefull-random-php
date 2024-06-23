<?php 

function getRandomStr($n) { 
    // Store all possible letters in a string.
    $str = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
    $randomStr = ''; 
  
    // Generate a random index from 0 to the length of the string -1.
    for ($i = 0; $i < $n; $i++) { 
        $index = rand(0, strlen($str) - 1); 
        $randomStr .= $str[$index]; 
    } 
  
    return $randomStr; 
} 

$n=25; 
echo getRandomStr($n); 

?>