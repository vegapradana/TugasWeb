<?php 
// koneksi database
include 'koneksidb.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id'];
 
 
// menghapus data dari database
mysqli_query($connection,"delete from tbl_biodata where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:index.php");
 
?>