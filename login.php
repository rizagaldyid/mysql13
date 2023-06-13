<?php
session_start();
if ($_SESSION['status'] == 'login'){
    header('Location:tampil-data.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>
<body>
    <h1>Silahkan Login</h1>
    <form action="proses-login.php" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" placeholder="Username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password" placeholder="Input Password"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <button type="submit">Login</button>
                    <button type="reset">Batal</button>
                </td>
            </tr>
        </table>

    </form>
</body>
</html>