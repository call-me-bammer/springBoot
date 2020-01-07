<?php
if (!$_POST['id']) {
    echo "
        <script>
            alert('Please enter your ID:)');
            history.go(-1);
        </script>
    ";
    exit;
}

if (!$_POST['pswd']) {
    echo ("
        <script>
            alert('Please enter your Password:)');
            history.go(-1);
        </script>
    ");
    exit;
}

echo $_POST['id'] . ", " . $_POST['pswd'] . "<br>";
?>