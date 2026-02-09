<?php
//  if(isset($_POST['tombol'])) {
 include 'koneksi.php'; 
 session_start(); 

//  var_dump($koneksi);
 $usernameSaya = $_POST['username'];
 $passwordSaya = $_POST['password']; 

 echo $passwordSaya;
 echo $usernameSaya;

//$query = "SELECT * FROM anggota WHERE username= '$usernameSaya' && password='$passwordSaya'"; 

$query = "SELECT * FROM anggota WHERE username='$usernameSaya' AND password='$passwordSaya'";
$data = mysqli_query($koneksi, $query); 

var_dump($data);

if(!$data){
    die("Query Error: " . mysqli_error($koneksi));
}

if(mysqli_num_rows($data) > 0){
    while($row = mysqli_fetch_assoc($data)){      
        $_SESSION['id_anggota']   = $row['id_anggota'];
        $_SESSION['username']     = $row['username'];
        $_SESSION['nama_anggota'] = $row['nama_anggota'];
    }
} else {
    echo "Username atau password salah";
}


header("Location: anggota/dashboard.php");
exit();


// if(mysqli_num_rows($data) > 0){ 

//     //$datas = mysqli_fetch_array($data); 

//    // $data = mysqli_query($koneksi, $query);

// //if(!$data){
//   //  die("Query Error: " . mysqli_error($koneksi));
// //}

    // var_dump($datas);


//} else {

  //  echo "<script>
    //         alert('Login Gagal, Username / Password Salah');
      //       window.location.assign('login-anggota.php');
        //  </script>";
//}
// }
//  }
?>