<?php
// message vars
$msg = '';
$msgClass = '';

// check for submit
if(filter_has_var(INPUT_POST, 'submit')){
    //get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // check required fields
    if(!empty($name) && !empty($email) && !empty($message)){
        //passed
        // check email
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            //failed
            $msg = 'please use valid email';
            $msgClass = 'alert-danger';
        } else {
            //passed
           //recipient email
           $toEmail ='ravechimp@hotmail.com';
           $subject = 'contact request from ' . $name;
           $body = '<h2>Contact request</h2>
           <h4>Name </h4> <p>' . $name . '</p>
           <h4>Email </h4> <p>' . $email . '</p>
           <h4>Message </h4> <p>' . $message . '</p>';
           $headers = "MIME-Version: 1.0" . "\r\n";
           $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";
           $headers .= "from: " . $name . "<" . $email . ">" . "\r\n";

           if(mail($toEmail, $subject, $body, $headers)){
            // email sent
            $msg = 'Your message was sent';
            $msgClass = 'alert-success';
           } else {
            $msg = 'Your message was not sent';
            $msgClass = 'alert-danger';
           }
        }
    } else {
        //failed
        $msg = 'please fill in all fields';
        $msgClass = 'alert-danger';
    }
};




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
    <title>Contact form</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <div class="navbar-header">
            <a href="index.php" class="navbar-brand">My website</a>
            </div>
        </div>
    </nav>

    <div class="container">
    <?php if($msg != ''): ?>
    <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
<?php endif; ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
    </div>
    <div class="form-group">
        <label for="message">Message</label>
        <textarea name="message" class="form-control"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
    </div>
    <br>
    <button class="btn btn-primary" name="submit">Submit</button>
    </form>
    </div>
</body>
</html>