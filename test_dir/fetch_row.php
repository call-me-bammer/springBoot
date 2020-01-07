<?php
$connect = mysqli_connect("localhost", "root", "bammerdb", "lamp_auth");
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$sql = "SELECT * FROM members;";
$result = mysqli_query($connect, $sql);

/* fetch associative array */
$n = 1;
while ($row = mysqli_fetch_row($result)) {
    echo "$row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6]<br>";
}

/* free result set */
mysqli_free_result($result);

/* close connection*/
mysqli_close($connect);
?>