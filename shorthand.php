<?php
$loggedIn = false;

if($loggedIn){
    echo 'you are logged in';
} else {
    echo 'you are not logged in';

}

echo '<br/>';

echo ($loggedIn) ? 'you are logged in' : 'you are not logged in';

echo '<br/>';

$isRegistered = ($loggedIn == true) ? true : false;
echo $isRegistered;

echo '<br/>';

$age = 38;
$score = 15;

echo 'your score is: ' . ($score > 10 ? ($age > 12 ? 'average' : 'exceptional') : ($age > 12 ? 'horrible' : 'average'));

echo '<br/>';

?>

<div>
<?php if($loggedIn){ ?>
    <h1>welcome user</h1>
<?php } else { ?>
    <h1>welcome guest</h1>
    <?php } ?>
</div>

<div>
<?php if($loggedIn): ?>
<h1>welcome user</h1>
<?php else: ?>
<h1>welcome guest</h1>
<?php endif; ?>
</div>

<?php $array = [1,2,3,4]; ?>

<div>
<?php foreach($array as $value): ?>
<?php echo $value; ?>
<?php endforeach; ?>
</div>