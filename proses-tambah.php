<?php

        include '../mysql 10/koneksi.php';
        error_reporting(1);

    

        echo $kode = htmlspecialchars( $_POST['kode']);
        $nama = htmlspecialchars($_POST ['nama']);
        $harga = htmlspecialchars($_POST ['harga']);
        $stok = htmlspecialchars($_POST ['stok']);

        $namaFile = $_FILES['gambar']['name'];
        $ukuranFile = $_FILES['gambar']['size'];
        $extAllow = ['jpg', 'png', 'jpeg'];
        $validExt = explode(".", $namaFile);
        $Extvalid = strtolower(end($validExt));
        $tmpName = $_FILES['gambar']['tmp_name'];
        $namaFilebaru = uniqid(). '.'.$Extvalid;

        //cek kondisi ukuran file
        if ($ukuranFile <=2000000){
            //cek kondisi validasi dari extension
            if(in_array($Extvalid,$extAllow)){
                $sql = "SELECT * FROM barang WHERE kode_barang ='$kode'";
        $query = mysqli_query($koneksi,$sql);
        $baris = mysqli_fetch_array($query);
        $row = mysqli_num_rows($query);
        
        if ($row >0) {
            header ("Location: tambah-data.php?pesan=kode $baris[kode_barang] Sudah ada");
        }else {
            $sql_insert = "INSERT INTO barang VALUES ('$kode', '$nama','$namaFilebaru', '$harga', '$stok');";
        $query_insert = mysqli_query($koneksi,$sql_insert);
        if($query_insert){
            echo "Data Berhasil Di Simpan";
            header ( 'Location:tampil-data.php?pesan=tambah' );
            move_uploaded_file($tmpName,'img/'. $namaFilebaru);
            
        }else{
            echo "Data Gagal Disimpan";
            header('Location:tambah-data.php' );

        }     
    }
             echo 'Extension ada';
            }else{
                echo "<script>alert('ekstensi Tidak Di temukan');history.back</script>";
            }
        }else {
            echo "<script>alert('Ukuran file terlalu besar');</>";
        }