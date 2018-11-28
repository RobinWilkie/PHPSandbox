<?php 
// FUNCTION - block of code that can be repeatedly called

function simpleFunction(){
    echo 'helllooooo';
};

// run function
simpleFunction();

echo '<hr/>';

// function with parameters/argument
function sayHello($name){
    echo 'hello' . ' ' . $name;
};

sayHello('Ezra');

echo '<hr/>';

// set default
function sayGoodbye($nom = 'you'){
    echo 'goodbye' . ' ' . $nom;
};

sayGoodbye('Ezra');
echo '<br/>';

sayGoodbye();
echo '<hr/>';

// return value from function
function addNumbers($num1, $num2){
    return $num1 + $num2;
};

echo addNumbers(3,4);
echo '<hr/>';

// passing arguments by reference
$myNum = 22;
function addFive($number){
    $number += 5;
}

function addTen(&$number){
    $number += 10;
}

addFive($myNum);
echo "Value: $myNum <br/>";

addTen($myNum);
echo "Value: $myNum <br/>";


?>