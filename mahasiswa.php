<?php

/*$connection = mysqli_connect("localhost", "root", "", "ifARR");
if ($connection) {
    echo"koneksi berhasil";
    $query = "SELECT * FROM mahasiswa";
    $result = mysqli_query($connection, $query);

    ///mysqli_fetch_arrya
    ///mysqli_fetch_assoc
    ///mysqli_fetch_object
    ///mysqli_fetch_row

    
    
}*/

    require 'fungsi.php';
    $qmahasiswa = "SELECT * FROM mahasiswa";
    $mahasiswas = tampildata($qmahasiswa);




?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="asset/css/style_mahasiswa.css">
</head>
<body>
    <h1>WEB INFORMATIKA</h1>
    <hr>
    <table class="link" border="1px" cellspacing="0" cellpadding="10px">
        <tr>
            <td>
                <a href="index.php">Home</a></td>
            <td><a href="Profile.php">Profile</a></td>
            <td><a href="contact.php">contact</a></td>
            <td><a href="mahasiswa.php">Data Mahasiswa</a></td>
        </tr>
    </table>
    <h2>Data Mahasiswa</h2>
    <a href="inputdata.php">
        <button>Tambah Data</button>
    </a>
<table border="1" cellpadding="5">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Jurusan</th>
        <th>Email</th>
        <th>No HP</th>
        <th>Foto</th>
    </tr>

    <?php
    $i = 1;
    foreach ($mahasiswas as $mhs) {
    ?>
<tr>
    <td align="center"><?= $i++; ?></td>
    <td align="center"><?= $mhs['nama']; ?></td>
    <td align="center"><?= $mhs['nim']; ?></td>
    <td align="center"><?= $mhs['jurusan']; ?></td>
    <td align="center"><?= $mhs['email']; ?></td>
    <td align="center"><?= $mhs['no_hp']; ?></td>
    <td align="center">
        <img src="asset/images/<?= $mhs['foto']; ?>" width="70">
    </td>

    <td align="center">
        <a href="editdata.php?id=<?= $mhs["id"]; ?>"><button>Edit</button></a> |
        <a href="deletedata.php?id=<?= $mhs["id"]; ?>"onclick="return confirm ('Yaqueeenn???')" ><button>Delete</button></a></td>
    </tr>
  <?php } ?>
</table>


<hr>
<br>

    <!--LATIHAN-->
    <table border="1" cellpadding="5px">
        <tr>
            <th>1</th>
            <th>1</th>
            <th>1</th>
            <th>1</th>
        </tr>
        <tr>
            <td>1</td>
            <td colspan="2" rowspan="2"></td>
            <td>1</td>
        </tr>
        <tr>
            <td>1</td>
            <td>1</td>
        </tr>
        <tr>
            <td>1</td>
            <td>1</td>
            <td>1</td>
            <td>1</td>
        </tr>
    
    </table>


</body>
</html>