<?php
$connect = mysqli_connect("localhost", "root", "bammerdb", "lamp_auth");
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$sql = "SELECT * FROM members;";
$result = mysqli_query($connect, $sql);

/* associative and numeric array */
$n = 1;
while ($row = mysqli_fetch_array($result, MYSQLI_BOTH)) {
    echo "$row[Uid], $row[Id], $row[Password], $row[Gender], $row[Tel], $row[Birthday], $row[Email]<br>";
}

/* free result set */
mysqli_free_result($result);

/* close connection */
mysqli_close($connect);
?>