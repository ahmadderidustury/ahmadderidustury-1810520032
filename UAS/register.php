
<?php
session_start();

if (!isset($_SESSION["login"])){ 
  header("Location: index.php");
  exit;
}
require 'functions.php';

if  (isset($_POST["register"])){

  if (registrasi($_POST)>0){
    echo "
    <script>
    alert('User Ditambahkan')
    document.location.href='index.php';
    </script>";



  } else{

    echo mysqli_error($conn);
  } 
}

?>

<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>INDONESIA SEHAT</title>
  <link rel="icon" href="./assets/images/indonesia1.jpg">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  
</head>
<body style="background:url(./assets/images/virus1.jpg)no-repeat; background-size: cover; height: 100vh;">
	<nav class="navbar navbar-light bg-danger">
		<form class="container-fluid justify-content-start">
      <svg type="button" xmlns="http://www.w3.org/2000/svg" width="50" height="50" color="white" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
      </svg>
      <a href="login.php" class="btn btn-sm btn-danger me-2" type="button">Aplikasi Web Untuk Admin</a>

    </form>
  </nav>
  <div class="container">
    <div class="row content">
     <div class="col-md-4 mb-2">
      <img src="assets/images/indonesia1.jpg" class="img-fluid" alt="image">
    </div>
    <div class="col-md-6">
      <h3 class="signin-text mb-3">GABUNG</h3>
      <form action="" method="post">
       <div class="form-group">
        <label for="email">Input Nama User</label>
        <input type="user" name="user" class="form-control" required>
      </div>
      <br>
      <div class="form-group">
        <label for="password">Masukan Password</label>
        <input type="Password" name="password" class="form-control"required>
      </div>
      <div class="form-group">
        <label for="password">konfirmasi Password</label>
        <input type="Password" name="password2" class="form-control"required>
      </div>
      <br>
      <button type="submit" class="btn btn-danger" name="register">Daftar Admin</button>

      <label class="text-right" style="margin-top: 50px;">Daftarkan Diri Anda Sebagai Penerima Vaksin Covid-19</label>

    </form>
  </div>

</div> 
</div>

<nav class="navbar fixed-bottom navbar-light bg-light">
  <div class="container-fluid">
   <a class="navbar-brand" href=""><h6>Ahmad Deri Dustury - 1810520032</h6></a>
 </div>
</nav>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script> 
</body>
</html>