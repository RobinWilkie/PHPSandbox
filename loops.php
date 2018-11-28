<?php
// LOOPS - execute code a set umber of times
// for, while, do...while, foreach

// FOR LOOP
// parameters - initialiser, condition, increment
for($i = 0; $i <= 10; $i++){
    echo $i;
    echo '<br/>';
};

echo '<hr/>';

// WHILE LOOP
// parameters - takes a condition usually outside of the loop

$x = 0;

while($x < 10){
    echo $x;
    echo '<br />';
    $x++;
}

echo '<hr/>';

// DO...WHILE LOOP
// parameters - the while takes a condition

$z = 0;

do {
    echo $z;
    echo '<br />';
    $z++;
}
while($z < 11);

echo '<hr/>';

// FOREACH LOOP
// works with arrays

$people = array('Tom', 'Dick', 'Jane');

foreach($people as $person){
    echo $person;
    echo '<br/>';
}

echo '<hr/>';

$emails = array('Tom' => 'tom@test.com', 'Dick' => 'dick@aol.com', 'Jane' => 'jane@hotmail.com');

foreach($emails as $email => $address){
    echo $email . ' - ' . $address;
    echo '<br/>';
}



?>