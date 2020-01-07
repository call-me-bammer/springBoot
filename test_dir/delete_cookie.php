<?php
$a = setcookie('userid', '');
$b = setcookie('username', '');

if ($a and $b) {
    echo "2 cookies are deleted!<br>";
}
?>