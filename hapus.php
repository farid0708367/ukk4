<?php
session_start();
include('koneksi.php');

if(isset($_GET['no_buku'])){
    $id =$_GET['no_buku'];

    mysqli_query($koneksi, "DELETE FROM yaa WHERE no_buku= '$id'");
}
header('location:admin.php');
?>
