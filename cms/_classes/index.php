<?php

/*

***** DEBUG MODE *****

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

*/

define('RANDOM_STR_LENGTH',	-10);

define('AUTH_EXPIRE',	31536000);


require_once("utils.class.php");

require_once("db.class.php");

require_once("content.class.php");

require_once("user.class.php");



$message = User::auth();

?>