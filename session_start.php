<?php
session_start();

$_SESSION['userid'] = "doras";
$_SESSION['username'] = "seunghun";
$_SESSION['time'] = time();

echo "three session variables are registered:)<br>";
?>