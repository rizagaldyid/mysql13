<?php
include'../mysql 10/koneksi.php';


$kode = $_GET['kode'];

$sql = "SELECT * FROM barang WHERE kode_barang = '$kode'";
$query = mysqli_query($koneksi, $sql);
$baris = mysqli_fetch_array($query);
$kode = $baris[0]; //kode barang
$nama = $baris[1]; //nama barang
$harga = $baris[2]; //harga barang
$stok = $baris[3]; //stok barang
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form Tambah Data</h1>
        <form action="update.php" method="post">
            <table>
            <tr>
                <td>Kode Barang</td>
                <td>:</td>
                <td><input type="text" name="kode" id="kode" value="<?= $kode ?>"></td>
            </tr>
            <tr>
                <td>Nama Barang</td>
                <td>:</td>
                <td><input type="text" name="nama" id="" value="<?= $nama ?>"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td>:</td>
                <td><input type="text" name="harga" id="" value="<?= $harga ?>"></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td>:</td>
                <td><input type="text" name="stok" id="" value="<?= $stok ?>"></td>
            </tr>
            </table>
            <input type="submit" id="simpan">
        </form>

    
</body>
</html>