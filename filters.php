<?php
// check for posted data
if(filter_has_var(INPUT_POST, 'data')){
    echo 'data found';
} else {
    echo 'no data found';
}

if(filter_has_var(INPUT_POST, 'data')){
    $email = $_POST['data'];

    // remove illegal characters
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    echo $email . '<br/>';

    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo 'email valid';
    } else {
        echo 'email not valid';
    }
}

echo '<br/>';

$var = '23';

if(filter_var($var, FILTER_VALIDATE_INT)){
    echo $var . ' is a number';
} else {
    echo $var . ' is not a number';

}

echo '<br/>';

$number = 'vhgv3424vvjvg234';
var_dump(filter_var($number, FILTER_SANITIZE_NUMBER_INT));

echo '<br/>';

$filters = array(
    "data" => FILTER_VALIDATE_EMAIL,
    "data2" => array(
        "filter" => FILTER_VALIDATE_INT,
        "options" => array(
            "min_range" => 1,
            "max_range" => 100
        )
    )
        );

        print_r(filter_input_array(INPUT_POST, $filters));


        echo '<br/>';

        $arr = array(
            "name" => "ezra furryman",
            "age" => "3",
            "email" => "ez@cat.com"
        );

        $filters2 = array(
            "name" => array(
                "filter" => FILTER_CALLBACK,
                "options" => "ucwords"
            ),
            "age" => array(
                "filter" => FILTER_VALIDATE_INT,
                "options" => array(
                    "min_range" => 1,
                    "max_range" => 120
                )
                ),
                "email" => FILTER_VALIDATE_EMAIL
            );

            print_r(filter_var_array($arr, $filters2));

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <input type="text" name="data">
    <input type="text" name="data2">

    <button type=submit>Submit</button>
    </form>
</body>
</html>