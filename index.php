<?php
session_start();
include('koneksi.php');


if(isset($_POST['kembali'])){
    header('location: superadmin.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER</title>
</head>
<body>
<h2>Data Perpustakaan</h2>
   
    <table border="1">
    <tr>
        <th>kode buku</th>
        <th>no buku</th>
        <th>judul buku</th>
        <th>tahun terbit</th>
        <th>nama penulis</th>
        <th>penerbit</th>
        <th>jumlah halaman</th>
        <th>harga</th>
        <th>gambar buku</th>
  
    </tr>
    <?php
     $data = mysqli_query($koneksi, "SELECT * FROM yaa");
     while($d = mysqli_fetch_array($data)){
    ?>
    <tr>
        <td><?=$d['kode_buku']?></td>
        <td><?=$d['no_buku']?></td>
        <td><?=$d['judul_buku']?></td>
        <td><?=$d['tahun_terbit']?></td>
        <td><?=$d['nama_penulis']?></td>
        <td><?=$d['penerbit']?></td>
        <td><?=$d['jumlah_halaman']?></td>
        <td><?=$d['harga']?></td>
        <td><?=$d['gambar_buku']?></td>
     
    </tr>
    <?php
     }
    ?>
    </table>
    <form action="index.php" method="post">
        <input type="submit" name="kembali" value="Keluar">
    </form>
    
</body>
</html>


