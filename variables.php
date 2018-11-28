<?php

echo 'check check';
echo '<br/>';

print 'testing 123';
echo '<br/>';

//single line comment
# single lin comment
/* multi
line 
comment
*/

// variables
// prefix with dollar sign
// starts with letter or underscore - no numbers and case sensitive
$output = 'hello world';
echo $output;
echo '<br/>';
// data types
// strings, numbers, floats, booleans, arrays, objects, NULL, Resource

$num1 = 4;
$float1 = 5.5;
$bool1 = true;
$array1 = [1,2,3];

$sum = $num1 + $float1;

echo $sum;
echo '<br/>';

$meet1 = 'hello';
$meet2 = 'there';

// concatination with dots for strings
$greet = $meet1 . ' ' . $meet2;
$greet2 = "$meet1 $meet2";

echo $greet;
echo '<br/>';
echo $greet2;
echo '<br/>';

// escape characters like apostrophes with a backslash
$escapeChar = 'They\'re here';
echo $escapeChar;
echo '<br/>';

// constants - name of const in uppercase, comma, then the value - only used if never going to change
define('GREETING', 'this is a constant');
echo GREETING;

?>