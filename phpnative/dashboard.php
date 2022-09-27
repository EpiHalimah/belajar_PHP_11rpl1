<?php
require_once('function/helper.php');

session_start();

$page = isset($_GET['page']) ? ($_GET['page']) : false;
if ($_SESSION['id'] == null) {
    header("location: " . BASE_URL);
    exit();
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!--Bootstrap Icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- My CSS-->
    <link rel="stylesheet" href="style.css"/>
    <title>Epi halimah</title>
  </head>
  <body id="Home">
   <!--Navbar-->
   <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Epi</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#Home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Profile">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#About">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact me">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
   <!--Akhir Navbar-->
</html>