<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Anggota </title>
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light"> 
<div class="vh-100 row justify-content-center align-items-center"> 
<form method="post" action="proses_anggota.php" class="col-md-3 border p-4 bg-white rounded-4">
<h4 class="text-center"> Login Anggota</h4>
<input name="username" class="form-control mb-3" placeholder="Username"> 
<input name="password" type="password" class="form-control mb-3" placeholder="Password">
<button type="submit" name="tombol" class="btn btn-success w-100 mb-2">Login</button> 
<a href="login-admin.php" class="text-decoration-none">Login sebagai admin</a><br>
<a href="pendaftaran-anggota.php" class="text-decoration-none">Pendaftaran Anggota</a>
</form>
</div>

</body>
</html>


