<?php
    session_start();

    if(isset($_SESSION["id_anggota"])){
        header("Location: http://localhost/perpustakaan3/anggota/dashboard.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Admin </title>
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light"> 
<div class="vh-100 row justify-content-center align-items-center"> 
<form method="post" action="proses_login.php" class="col-md-3 border p-4 bg-white rounded-4">
<h4 class="text-center"> Login Admin</h4>
<input name="username" class="form-control mb-3" placeholder="Username"> 
<input name="password" type="password" class="form-control mb-3" placeholder="Password">
<button type="submit" name="tombol" class="btn btn-success w-100 mb-2">Login</button> 
<a href="login-anggota.php" class="text-decoration-none">Login sebagai Anggota</a>
</form>

</div>

</body>
</html>
