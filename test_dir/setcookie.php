<?php
$c = setcookie("userid", "bammer");
$d = setcookie("username", "BAMM", time() + 80);

if ($c and $d) {
    echo "Cookie 'userid' and 'username' are generated!<br>";
}
?>