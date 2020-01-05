<?php
session_start();

unset($_SESSION['userid']);
unset($_SESSION['username']);
unset($_SESSION['time']);

$id = $_SESSION['userid'];
$time = $_SESSION['time'];

$time =date('Y-m-d(H:i:s)', $time);

echo "$id, $time<br>";

?>