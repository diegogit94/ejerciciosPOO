<?php 

function autoload($class)
{
	$url = str_replace("\\", "/", $class . ".php"); //With this function we can replace a character or string that we have choosen
	require_once($url);
}

spl_autoload_register('autoload');


 ?>