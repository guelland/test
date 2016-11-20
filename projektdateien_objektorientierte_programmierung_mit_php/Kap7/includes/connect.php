<?php

$db = new mysqli('localhost','root','1234','oopgb');
if ($db->connect_error){
	$error = $db->connect_error;
}
