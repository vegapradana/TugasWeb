<?php
include "koneksidb.php";

if(isset($_POST['btn'])){
    $nama = $_POST['nama'];
    $npm = $_POST['npm'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $password = $_POST['password'];
    

    // query insert data ke database dalam tabel anggota
    $query = "INSERT INTO tbl_biodata (nama, npm, tgl_lahir, password) values('$nama', '$npm', '$tgl_lahir', '$password')";
    if(mysqli_query($connection, $query)){
        header("Location: index.php");
    }else{
        echo "Tambah data gagal";
    }
}

 // menutup koneksi ke database
?>