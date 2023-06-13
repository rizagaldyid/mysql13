<?php
include('../mysql 10/koneksi.php');

$kode = $_GET['kode'];
$sql = "DELETE FROM barang where kode_barang='$kode'";
$query = mysqli_query($koneksi,$sql);

if ($query) {
    header('location: tampil-data.php');
}else {
    echo "Data gagal dihapus";
}