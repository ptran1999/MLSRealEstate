<?php
//connect to database
$host = "127.0.0.1";
$username = "root";
$password = "usbw";
$database = "cop4710";
$link = mysqli_connect($host, $username, $password, $database);

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}


echo "<br>";

?>