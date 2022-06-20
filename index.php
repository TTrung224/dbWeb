<?php
    echo "hola";
    $connection = mysqli_connect("us-cdbr-east-05.cleardb.net", "b704e0507b7306", "41c3cb98", "heroku_f8f2d91b657802f");

    if (mysqli_connect_errno()) {
        echo "failed to connect db " . mysqli_connect_error();
    }
?>