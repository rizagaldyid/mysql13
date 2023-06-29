<?
include '../mysql 10/koneksi.php';

$kode = $_POST['kode'];
$jumlah = $_POST['jumlah'];

$sql = "INSERT INTO penjualan VALUES(NULL, '$kode', '$jumlah',now())";
mysqli_query($koneksi, $sql);