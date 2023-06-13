<?php
session_start();
include '../mysql 10/koneksi.php';

$username =$_POST['username'];
$password =md5($_POST['password']);



$sql = "SELECT username, password FROM user WHERE username= '$username' AND password= '$password'";
$query = mysqli_query($koneksi,$sql);

$cek = mysqli_num_rows($query);

// mengecek apakah data yang di kirim ada dalam database
if($cek > 0){
    echo "Login Berhasil";
    $_SESSION['username'] = $username;
    $_SESSION['status'] = 'login';
    header('Location:tampil-data.php');
}else{
    header('Location:login.php');
    
}



?>
