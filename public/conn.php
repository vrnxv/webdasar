<?php

$host = "localhost";
$user = "root";
$pass = "Dim88@4d3in";
$base = "mahasiswa";


$conn = mysqli_connect($host, $user, $pass, $base);

if (mysqli_connect_errno()) {
    die("Failed To Connect");
}