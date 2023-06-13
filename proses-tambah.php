<?php

        include '../mysql 10/koneksi.php';
        error_reporting(1);

    

        echo $kode = htmlspecialchars( $_POST['kode']);
        $nama = htmlspecialchars($_POST ['nama']);
        $harga = htmlspecialchars($_POST ['harga']);
        $stok = htmlspecialchars($_POST ['stok']);

        $sql = "SELECT * FROM barang WHERE kode_barang ='$kode'";
        $query = mysqli_query($koneksi,$sql);
        $baris = mysqli_fetch_array($query);
        $row = mysqli_num_rows($query);
        
        if ($row >0) {
            header ("Location: tambah-data.php?pesan=kode $baris[kode_barang] Sudah ada");
        }else {
            $sql_insert = "INSERT INTO barang VALUES ('$kode', '$nama', '$harga', '$stok');";
        $query_insert = mysqli_query($koneksi,$sql_insert);
        if($query_insert){
            echo "Data Berhasil Di Simpan";
            header ( 'Location:tampil-data.php?pesan=tambah' );
            
        }else{
            echo "Data Gagal Disimpan";
            header('Location:tambah-data.php' );

        }    

        

   
    }
        



?> 