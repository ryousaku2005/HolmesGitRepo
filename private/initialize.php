<?php
ob_start();
define("PRIVATE_PATH", dirname(__FILE__));
define("PROJECT_PATH", dirname(PRIVATE_PATH));
define("PUBLIC_PATH", PROJECT_PATH .'\public');
define("SHARED_PATH", PRIVATE_PATH .'\shared');


require_once('functions.php');

// echo PRIVATE_PATH;
// echo dirname(PRIVATE_PATH);
// echo PUBLIC_PATH;
// echo SHARED_PATH;

?>