<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Klinik</title>
    <style>
        body {font-family:tahoma, arial}
        table {border-collapse: collapse}
        th, td {font-size: 13px; border: 1px solid #00acb1; padding: 4px 5px; color: #303030}
        th {background: #87e4db; font-size: 12px; border-color:#00acb1; padding: 8px 5px;}
    </style>
</head>

<body>

    <h1>Sistem Klinik</h1>
    <h3>Tabel Pasien </h3>
        <table>
            <thead>
                <tr>
                <th>Id Pasien</th>
                <th>Nama Pasien</th>
                <th>Jenis Kelamin</th>
                <th>Umur</th>
                </tr>
            </thead>
            <?php
                include 'koneksi.php';
                $sql = 'SELECT  * FROM pasien';
                $query = mysqli_query($koneksi, $sql);		
                while ($row = mysqli_fetch_array($query))
                {
            ?>
            <tbody>
                <tr>
                <td><?php echo $row['id_pasien'] ?></td>
                <td><?php echo $row['nama_pasien'] ?></td>
                <td><?php echo $row['jenis_kelamin'] ?></td>
                <td><?php echo $row['umur'] ?></td>
                </tr>
            </tbody>
            <?php
                }
            ?>
        </table>
    <br>
    <h3>Tabel Berobat </h3>
        <table>
            <thead>
                <tr>
                <th>Id Berobat</th>
                <th>Id Pasien</th>
                <th>Id Dokter</th>
                <th>Tgl Berobat</th>
                <th>Keluhan Pasien</th>
                <th>Hasil Diagnosa</th>
                <th>Penatalaksanaan</th>
                </tr>
            </thead>
            <?php	
                $sql = 'SELECT  * FROM berobat';
                $query = mysqli_query($koneksi, $sql);		
                while ($row = mysqli_fetch_array($query))
                {
            ?>
            <tbody>
                <tr>
                <td><?php echo $row['id_berobat'] ?></td>
                <td><?php echo $row['id_pasien'] ?></td>
                <td><?php echo $row['id_dokter'] ?></td>
                <td><?php echo $row['tgl_berobat'] ?></td>
                <td><?php echo $row['keluhan_pasien'] ?></td>
                <td><?php echo $row['hasil_diagnosa'] ?></td>
                <td><?php echo $row['penatalaksanaan'] ?></td>
                </tr>
            </tbody>
            <?php
                }
            ?>
        </table>
    <br>
    <h3>Tabel Dokter </h3>
            <table>
                <thead>
                    <tr>
                    <th>Id Dokter</th>
                    <th>Nama Dokter</th>
                    </tr>
                </thead>
                <?php	
                    $sql = 'SELECT  * FROM dokter';
                    $query = mysqli_query($koneksi, $sql);		
                    while ($row = mysqli_fetch_array($query))
                    {
                        ?>
                <tbody>
                    <tr>
                    <td><?php echo $row['id_dokter'] ?></td>
                    <td><?php echo $row['nama_dokter'] ?></td>
                    </tr>
                </tbody>
                <?php
                    }
                    ?>
            </table>

    <h3>Tabel Obat </h3>
        <table>
            <thead>
                <tr>
                <th>Id Obat</th>
                <th>Nama Obat</th>
                </tr>
            </thead>
            <?php		
                $sql = 'SELECT  * FROM obat';
                $query = mysqli_query($koneksi, $sql);		
                while ($row = mysqli_fetch_array($query))
                {
            ?>
            <tbody>
                <tr>
                <td><?php echo $row['id_obat'] ?></td>
                <td><?php echo $row['nama_obat'] ?></td>
                </tr>
            </tbody>
            <?php
                }
            ?>
        </table>

    <h3>Tabel Resep Obat </h3>
        <table>
            <thead>
                <tr>
                <th>Id Resep</th>
                <th>Id Berobat</th>
                <th>Id Obat</th>
                </tr>
            </thead>
            <?php	
                $sql = 'SELECT  * FROM resep_obat';
                $query = mysqli_query($koneksi, $sql);		
                while ($row = mysqli_fetch_array($query))
                {
            ?>
            <tbody>
                <tr>
                <td><?php echo $row['id_resep'] ?></td>
                <td><?php echo $row['id_berobat'] ?></td>
                <td><?php echo $row['id_obat'] ?></td>
                </tr>
            </tbody>
            <?php
                }
            ?>
        </table>

    <h3>Tabel Users </h3>
        <table>
            <thead>
                <tr>
                <th>Id</th>
                <th>Username</th>
                <th>Password</th>
                <th>Nama Lengkap</th>
                </tr>
            </thead>
            <?php	
                $sql = 'SELECT  * FROM users';
                $query = mysqli_query($koneksi, $sql);		
                while ($row = mysqli_fetch_array($query))
                {
            ?>
            <tbody>
                <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['username'] ?></td>
                <td><?php echo $row['password'] ?></td>
                <td><?php echo $row['nama_lengkap'] ?></td>
                </tr>
            </tbody>
            <?php
                }
            ?>
        </table>

</body>

</html>