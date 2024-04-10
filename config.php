<?php

define("root", "");
define("php_root", $_SERVER["DOCUMENT_ROOT"]."/PHP_producto2");

define("host", "127.0.0.1");
define("db", "uoc_transfers");
define("user", "root");
define("pass", "");


spl_autoload_register("myAutoload");
function myAutoload($class_name)
{
	if (file_exists(php_root."/classes/".$class_name.".class.php"))
		include_once php_root."/classes/".$class_name.".class.php";
}


$mysqli = new mysqli(host, user, pass, db);
if ($mysqli->connect_errno) {
	echo "Fallo al contenctar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	exit;
}

$mysqli->set_charset("utf8");

?>