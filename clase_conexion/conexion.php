<?php
$host="localhost";
$user="root";
$pass="root";
$bd="world";


$con = new mysqli($host,$user,$pass,$bd);

if ($con->connect_errno) {
    printf("connection failed: %s\n", $con->connect_error());
    //echo "connection failed: " . $con->connect_error();
    exit();
}

$res = $con->query("SELECT VERSION()");

if ($res) {
    $row = $res->fetch_row();
    //print_r($row);
    echo $row[0];
}

$res->close();
$con->close();

?>