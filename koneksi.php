<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "klinik_312010147";
$koneksi = mysqli_connect($host, $user, $pass, $db);
if ($koneksi == false)
{
    echo "Koneksi ke server gagal.";
    die();
}
?>