<?php
// array - a variable that holds multiple values
// indexed, associative, multi-dimensional

// INDEXED ARRAYS
$people = array('Tom', 'Dick', 'Jane');
echo $people[1];

echo '<br />';

$ids = array(123, 456, 789);
echo $ids[2];

echo '<br />';

$cars = ['Ford', 'Honda', 'Toyota'];
echo $cars[0];

echo '<br />';

$cars[3] = 'Mercedes';
echo $cars[3];

echo '<br />';

$cars[] = 'BMW';
echo $cars[4];

echo '<br />';

// count tellsyou the number of variables in an array
echo count($cars);

echo '<br />';

// print_r shows you the whole array
print_r($cars);

echo '<br />';

// var_dump shows data type - good for debugging
var_dump($cars);

echo '<br />';

// ASSOCIATIVE ARRAYS
// includes the key and value
$persons = array('Robin' => 38, 'Mary Kate' => 36, 'Ezra' => 3);
echo $persons['Robin'];

echo '<br />';

$ages = [38 => 'Robin', 36 => 'Mary Kate', 3 => 'Ezra'];
echo $ages[3];

echo '<br />';

$persons['Doug'] = 37;
echo $persons['Doug'];
print_r($persons);

echo '<br />';

// MULTI-DIMENSIONAL
// arrays inside arrays

$bikes = array(
    array('chopper', 20, 10),
    array('raleigh', 30, 8),
    array('boardman', 40, 6)
);

echo $bikes[2][1];
echo $bikes[0][0];

?>