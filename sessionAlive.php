<?php
session_start();

$id = $_SESSION['userid'];
$time = $_SESSION['time'];

$time =date('Y-m-d(H:i:s)', $time);

echo "$id, $time<br>";
?>