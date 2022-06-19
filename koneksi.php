<?php
$host = "localhost";
$user = "adminklinik";
$pass = "312010147";
$db = "klinik_312010147";

//Buat variable koneksi untuk menghubungkan database dgn PHP
$koneksi = mysqli_connect($host, $user, $pass, $db); //isi dgn 4 variable

//Cek koneksi
if ($koneksi == false)
{
    echo "Koneksi ke server gagal.";
    die();
}
?>
