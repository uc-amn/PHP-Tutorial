 <?php

// trigger_error('Example Error', E_ALL & ~E_WARNING);

// error_reporting(E_ALL & ~E_WARNING);
ini_set('error_reporting', E_ALL & ~E_WARNING);
echo E_ALL;

error_log("The error is saved as :", null, null);