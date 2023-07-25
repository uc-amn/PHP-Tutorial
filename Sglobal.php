$GLOBALS
$_SERVER
$_REQUEST
$_GET
$_POST
$_SESSION
$_COOKIE
$_FILES
$_ENV


<?php
//  Use of PHP superglobals to submit the data
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];
    }

    ?>