<?php
    $conection=mysqli_connect("localhost","root","147896325","example");
    if (!$conection) {
        echo "Error: I wasnt able to connect with MySQL." . PHP_EOL;
        echo "error number: " . mysqli_connect_errno() . PHP_EOL;
        echo "error description " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
?>
