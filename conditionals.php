<?php
// CONDITIONALS

$num = 7;

if($num == 5){
    echo 'wrong';
} elseif($num < 5) {
    echo 'wrong';
} else {
    echo 'correct';
}

// nested if statement
$number = 6;

if($number > 5){
    if($number < 10){
        echo "passed";
    }
}

// logical operators - && || 

if ($number > 5 && $num < 8){
    echo 'success';
}

if ($number < 5 || $num == 7){
    echo 'another success';
}

echo '<hr/>';
// switches
$favColour = 'red';

switch($favColour){
    case 'orange':
        echo 'this is not your favourite colour';
        break;
    case 'yellow':
        echo 'this is not your favourite colour';
        break;
    case 'red':
        echo 'hurrah, this is your favourite colour';
        break;
    case 'blue':
        echo 'this is not your favourite colour';
        break;
        default:
        echo 'what is your favourite colour?';
}


?>