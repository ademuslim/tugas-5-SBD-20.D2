<?php
$host = "localhost";
$user = "adminklinik";
$pass = "312010147";
$db = "klinik_312010147";
$koneksi = mysqli_connect($host, $user, $pass, $db);
if ($koneksi == false)
{
    echo "Koneksi ke server gagal.";
    die();
}
?>
