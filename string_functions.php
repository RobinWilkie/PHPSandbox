<?php

// substring - reurns a portion of a string - takes in athe start and finish position from zero
$output = substr('Hello', 1, 3);

echo $output;

echo '<br/>';

// string lenght - returns length of string including spaces
$output2 = strlen('Robin Wilkie');

echo $output2;

echo '<br/>';

//string position - finds position of first occurance of a sub string - takes in what you're searching for
$output3 = strpos('Robin Wilkie', 'n');

echo $output3;

echo '<br/>';

//string position - finds position of last occurance of a sub string - takes in what you're searching for
$output4 = strrpos('Robin Wilkie', 'i');

echo $output4;

echo '<br/>';

//trim - strips whitespace
$output5 = 'Ezra Furryman Dilkie      ';

var_dump($output5);

echo '<br/>';

$trimmed = trim($output5);
var_dump($trimmed);

echo '<br/>';

// string to upper - makes string upper case
// string to lower - makes string lower case
$output6 = strtoupper('hello there');
echo $output6;
echo '<br/>';
$output7 = strtolower('STOP SHOUTING');
echo $output7;
echo '<br/>';

// capitalize every word
$output8 = ucwords('the empire strikes back');
echo $output8;
echo '<br/>';

// string replace - replaces all occurances of a search string with a replacement
$text = 'Hello World';
$output9 = str_replace('World', 'Everyone', $text);
echo $output9;
echo '<br/>';

// is string - checks if is string or not - returns 1 if true
$val = 'Hello';
$output10 = is_string($val);
echo $output10;
echo '<br/>';

$values = [true, false, null, 'check', 234, '99', 22.6, '33.7'];
foreach($values as $value){
    if(is_string($value)){
        echo $value . ' is a string';
        echo '<br/>';
    }
}

// gz compress - compresses a string
$string = 'Chicken elit magna, quis spare ribs minim pariatur tri-tip jowl flank officia duis anim drumstick. Kielbasa landjaeger rump reprehenderit non ribeye pork belly duis ipsum magna ut beef sed pig. Tri-tip cillum deserunt dolore pork chop bresaola, eiusmod et velit aliqua ea. Shankle ipsum eu, quis beef ribs biltong ut id in strip steak consequat. ';

$compressed = gzcompress($string);
echo $compressed;

echo '<br/>';

$original = gzuncompress($compressed);
echo $original;

?>