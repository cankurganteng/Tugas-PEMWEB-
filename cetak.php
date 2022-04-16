<?php
require 'function.php';

$data=mysqli_query($db,"SELECT * FROM tb_pendaftaran WHERE id_pendaftaran asc limit 1 ");
$hasil=mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="img/ubr.png" />
    <title>Cetak Bukti Daftar</title>
  
</head>
<body>
    <h2 align="center">Bukti Pendaftaran</h2>
    <hr><hr>
    <form >
    <table >
        <tr>
        <td>Tahun Angkatan</td>
        <td>:</td>
        <td><?php echo $hasil ["angkatan"];?></td>
        </tr>  
        <tr>
        <td>Nama</td>
        <td>:</td>
        <td><?php echo $hasil ["nama"];?></td>
        </tr>  
        <tr>
        <td>Npm</td>
        <td>:</td>
        <td><?php echo $hasil ["npm"];?></td>
        </tr>  
        <tr>
        <td>Prodi</td>
        <td>:</td>
        <td><?php echo $hasil ["prodi"];?></td>
        </tr>  
        <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><?php echo $hasil ["alamat"];?></td>
        </tr>  
        <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><?php echo $hasil ["jk"];?></td>
        </tr>  
        <tr>
        <td>Agama</td>
        <td>:</td>
        <td><?php echo $hasil ["agama"];?></td>
        </tr>  
        <tr>
        <td>Tgl-Daftar</td>
        <td>:</td>
        <td><?php echo $hasil ["tgl_daftar"];?></td>
        </tr> 
    </table>    
</body> 
</html>