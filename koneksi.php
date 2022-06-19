<?php
$host = "localhost";
$user = "adminklinik";
$pass = "312010147";
$db = "klinik_312010147";

//Buat variable koneksi untuk menghubungkan database dgn PHP
$koneksi = mysqli_connect($host, $user, $pass, $db); //isi dgn 4 variable
//Cek koneksi
if ($koneksi){
    $buka=mysqli_select_db($db);
    echo "Database dapat terhubung";
    if (!$buka){
        echo "Database tidak dapat terhubung";
    }
}else{
    echo "MySQL tidak terhubung";
}

// if ($koneksi == false)
// {
//     echo "Koneksi ke server gagal.";
//     die();
// }
?>
