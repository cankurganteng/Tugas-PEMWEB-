<?php

require 'function.php';
if (isset($_POST['submit'])){
// proses insert
$insert = mysqli_query($db, "INSERT INTO tb_pendaftaran VALUES(
        '',
        '".$_POST['angkatan']."',
        '".$_POST['nama']."',
        '".$_POST['npm']."',
        '".$_POST['prodi']."',
        '".$_POST['alamat']."',
        '".$_POST['jk']."',
        '".$_POST['agama']."',
        '".$_POST['tgl_daftar']."'

    )");

    if($insert){
        echo '<script>window.location="berhasil.php"</script>';
    }else{
        echo 'GAGAL'.mysqli_error($db);
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>formulir pendaftaran</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!--bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!--bootstrap css-->

    <!--bootstrap saya-->
    <link rel="stylesheet" href="style.css" />
    <!--bootstrap saya-->

    <link rel="icon" type="image/png" sizes="16x16" href="img/ubr.png" />
  
</head>

<style>
body{
    background-color: aquamarine;
}
.box-formulir{
    width: 50%;
    margin: 100px auto;
}
.box{
    background-color: #fff;
    border: 2px solid;
    padding: 15px;
    box-sizing: border-box;
    margin: 5px 0 25px;
}
.table-form{
    width: 100%;
}
.table-form tr td :nth-child(1){
    width: 30%;
}
.input-control{
    padding: 5px 10px;
    font-size: 14px;
    margin: 15px 0;
}
.btn-daftar{
    padding: 10px 17px;
    background-color: #4a99d8;
    color: #fff;
    border: none;
    font-size: 14px;

}
.btn-daftar:hover{
    cursor: pointer;
    background-color: #4881aa;
}

</style>

<body>

    <!--navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow">
      <div class="container">
        <a class="navbar-brand" >Unit Kegiatan Mahasiswa Volly Ball UNBARA</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Tentang Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="daftar.php">Daftar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Log out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <br />
<!--navbar-->

<!--bagian box formulir-->
<section class="box-formulir">
    <h2>formulir pendaftaran ukm voli ball unbara </h2>

<!--bagian  form biodata-->
<form action="" method="POST">
    <div class="box">
        <table border="0" class="table-form">
            <h4 align= "center">Biodata Mahasiswa</h4><hr>
            
<!--TH.ANGKATAN-->
            <tr>
                <td>Tahun Angkatan</td>
                <td>:</td>
                <td>
                    <input type="text" name="angkatan" class="input-control">
                </td>
            </tr>
<!--TH.ANGKATAN-->

<!--PILIH PRODI-->              
            <tr>
                <td>Program Studi</td>
                <td>:</td>
                 <td>
                     <select class="input-control" name="prodi">
                        <option value="">--pilih--</option>
                        option value="Informatika">--Informatika--</option>
                        <option value="Teknik Sipil">--Teknik Sipil--</option>
                        <option value="Teknik Lingkungan">--Teknik Lingkungan--</option>
                        <option value="B.indonesia">--B.indonesia--</option>
                        <option value="B.Inggris">--B.Inggris--</option>
                        <option value="Ilmu Komunikasi">--Ilmu Komunikasi--</option>
                        <option value="Manajemen Pendidikan">--Manajemen Pendidikan--</option>
                        <option value="Ekonomi Bisnis">--Ekonomi Bisnis--</option>
                        <option value="">--pilih--</option>
                        <option value="">--pilih--</option>
                        <option value="">--pilih--</option>
                        <option value="">--pilih--</option>
                        <option value="">--pilih--</option>
                        <option value="">--pilih--</option>
                        <option value="">--pilih--</option>
                        <option value="">--pilih--</option>
                    </select>
                </td>
            </tr>
<!--PILIH PRODI-->              
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td>
                    <input type="text" name="nama" class="input-control">
                </td>
            </tr>

<!--npm-->            
            <tr>
                <td>NPM</td>
                <td>:</td>
                <td>
                    <input type="text" name="npm" class="input-control">
                </td>
            </tr>
<!--npm-->            
        
<!--alamat-->
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>
                    <textarea class="input-control" name="alamat"></textarea>
                </td>
            </tr>
<!--alamat-->

<!--jenis kelamin-->
        `       <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jk" class="input-control" value="Laki-Laki"> Laki-Laki &nbsp &nbsp;
                        <input type="radio" name="jk" class="input-control" value="Perempuan"> Perempuan
                    </td>
                </tr>
<!--jenis kelamin-->

<!--agama-->
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td>
                    <select name="agama" class="input-control">
                        <option value="">--pilih--</option>
                        <option value="islam">--islam--</option>
                        <option value="Kristen">--Kristen--</option>
                        <option value="Hindu">--Hindu--</option>
                        <option value="Budha">--Budha--</option>
                        <option value="Katolik">--Katolik--</option>
                        <option value="konghucu">--konghucu--</option>
                    </select>
                </td>
            </tr>
<!--agama-->

 <!--tanggal-->

            <tr>
                <td>Tanggal Daftar</td>
                <td>:</td>
                <td>
                    <input type="date" name="tgl_daftar" class="input-control">
                </td>
            </tr>
<!--tanggal-->

<!--button daftar-->
             <tr>
                 <td></td>
                <td></td>
                <td>
                    <input type="submit" name="submit" class="btn-daftar" value="Daftar">
                </td>
            </tr>
<!--button daftar-->
            
        </table>
    </div>
</form>
</section>
<!--RESPONSIF NAVBAR-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!--RESPONSIF NAVBAR-->
</body>