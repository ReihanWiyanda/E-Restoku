<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Login Admin E-Restoku</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="sweat/dist/sweetalert2.all.min.js"></script>

<?php
require 'koneksi.php';


if ( isset($_POST['submit']) ) {
  
  $id_pegawai = $_POST["id_pegawai"];
  $password = $_POST["password"];

  $get_user = "select * from pegawai where id_pegawai = '$id_pegawai'";
  $result = mysqli_query($koneksi, $get_user);

  $data = mysqli_fetch_array($result);
  
  if ($password == $data['password'] ) {
    session_start();
    $_SESSION["id_pegawai"] = $id_pegawai;
    $_SESSION["password"] = $password;
    $_SESSION["status"] = "login";
    header("Location: admin/index.php");
  } else {
    echo "<script>alert('Email atau Password Salah')</script>";
  }
}
?>

<style>
.login-form {
    width: 340px;
    margin: 50px auto;
  	font-size: 15px;
}
.login-form form {
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
}
</style>
</head>
<body>
<div class="login-form">
    <form action="" method="post">
        <h2 class="text-center">Log in</h2>  

        <div class="form-group">
            <input type="text" name="id_pegawai" class="form-control" placeholder="ID Pegawai" required="required">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-block">Log in</button>
        </div>       
    </form>
</div>
</body>
</html>