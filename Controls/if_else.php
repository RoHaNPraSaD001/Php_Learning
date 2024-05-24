<?php

$number1 = 1; 
$number2 = 5;  


$operation = 1; 

if ($operation == 1) {
    // Addition
    $result = $number1 + $number2;
    echo "Addition of $number1 and $number2 is: $result\n";
} elseif ($operation == 2) {
    // Subtraction
    $result = $number1 - $number2;
    echo "Subtraction of $number1 and $number2 is: $result\n";
} elseif ($operation == 3) {
    // Multiplication
    $result = $number1 * $number2;
    echo "Multiplication of $number1 and $number2 is: $result\n";
} elseif ($operation == 4) {
    // Division
    if ($number2 != 0) {
        $result = $number1 / $number2;
        echo "Division of $number1 by $number2 is: $result\n";
    } else {
        echo "Division by zero is not allowed.\n";
    }
} elseif ($operation == 5) {
    // Check if the number is odd or even
    if ($number1 % 2 == 0) {
        echo "$number1 is an even number.\n";
    } else {
        echo "$number1 is an odd number.\n";
    }
} elseif ($operation == 6) {
    // Wrong input
    echo "Wrong input\n";
} else {
    // If the operation code is not within 1 to 6
    echo "Invalid operation\n";
}
?>