<?php
$host = "DESKTOP-DLFRMHS";
$user = "sa";
$pass = "phincon123";
$db = "latihan1";
$conn = mysqli_connect($host, $user, $pass, $db);

if ($conn == false)
{
    echo "Koneksi ke server gagal.";
    die();
} #else echo "Koneksi berhasil";
?>