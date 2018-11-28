<?php
// $_SERVER SUPERGLOBAL

// create server array
$server = [
    'Host server name' => $_SERVER['SERVER_NAME'],
    'Host Header' => $_SERVER['HTTP_HOST'],
    'Server Software' => $_SERVER['SERVER_SOFTWARE'],
    'Document Root' => $_SERVER['DOCUMENT_ROOT'],
    'Current Page' => $_SERVER['PHP_SELF'],
    'Script Name' => $_SERVER['SCRIPT_NAME'],
    'Absolute Path' => $_SERVER['SCRIPT_FILENAME']

];

?>

<pre>
<?php print_r($server); ?>
</pre>

<?php



// create client array

$client = [
    'Client system info' => $_SERVER['HTTP_USER_AGENT'],
    'Client IP' => $_SERVER['REMOTE_ADDR'],
    'remote port' => $_SERVER['REMOTE_PORT']
];

?>

<pre>
<?php print_r($client); ?>
</pre>

<?php




?>