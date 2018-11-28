<?php

if(isset($_GET['name'])){
 echo $_GET['name'];
 print_r($_GET);
 echo htmlentities($_GET['name']);
}

if(isset($_POST['name'])){
 echo $_POST['name'];
 print_r($_POST);
$name = htmlentities($_POST['name']);
echo $name;
}

if(isset($_REQUEST['name'])){
     echo $_REQUEST['name'];
     print_r($_REQUEST);
    $name = htmlentities($_REQUEST['name']);
    echo $name;
    }

    echo $_SERVER['QUERY_STRING'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>get post website</title>
</head>
<body>
<form method="POST" action="getPost.php">
<label for="name">Name</label>
<br>
<input type="text" name='name'>
<br>
<label for="email">Email</label>
<br>
<input type="text" name='email'>
<br>
<input type="submit" value='submit'>
</form>
    
</body>
</html>