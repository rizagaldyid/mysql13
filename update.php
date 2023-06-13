<?php
include '../mysql 10/koneksi.php';

if (isset($_GET['kode'])) {
    header('location: tampil-data.php');
}


$kode = $_POST['kode'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

$sql = "UPDATE barang SET nama_barang='$nama', harga= $harga, stok=$stok WHERE kode_barang='$kode'";
$query = mysqli_query($koneksi,$sql);

if ($query){
    header ('location: tampil-data.php');
}else{
    echo "Data Gagal Diupdate";
}