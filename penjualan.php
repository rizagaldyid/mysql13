<?php
include'../mysql 10/koneksi.php';


$kode = $_GET['kode'];

$sql = "SELECT * FROM barang WHERE kode_barang = '$kode'";
$query = mysqli_query($koneksi, $sql);
$baris = mysqli_fetch_array($query);
$kode = $baris[0]; //kode barang
$nama = $baris[1]; //nama barang
$image = $baris[2]; //image barang
$harga = $baris[3]; //harga barang
$stok = $baris[4]; //stok barang
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 >Form Tambah Data</h1>
        <form action="proses-tambah.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Kode Barang</td>
                <td>:</td>
                <td><input type="text" name="kode" id="kode" value="<?="$kode"?>"></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td>:</td>
                <td><input type="text" name="nama" id=""></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><input type="text" name="harga" id=""></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td>:</td>
                <td><input type="text" name="stok" id=""></td>
            </tr>
            <tr>
                <td>Gambar</td>
                <td>:</td>
                <td><input type="file" name="gambar" id="" onchange="upload(this)"></td>
                <div style ="width:100px">
                <img id="image" width="100%" height="100px">

                </div>
            </tr>
        </table>
</body>
</html>