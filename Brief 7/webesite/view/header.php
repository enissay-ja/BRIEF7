<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GlowGuru</title>

    <!-- tab icon -->
    <link rel="icon" href="./source/image/logo-default.PNG">

    <!-- bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- font awsome -->
    <script src="https://kit.fontawesome.com/47ec2912e7.js" crossorigin="anonymous"></script>

    <!-- <link rel="stylesheet" href="./source/css/bootstrap.css"> -->
    <!-- <link rel="stylesheet" href="./source/css/fonts.css"> -->
    <link rel="stylesheet" href="./source/css/style.css">

  </head>

  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <a class="navbar-brand" href="index.php"><img src="./source/image/logo-default.PNG" alt="" width="35" height="35" > GLOWGURU </a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="shop.php">Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php"  >About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php"  >Contact</a>
          </li>
          <li class="nav-item">
          <a  href="login.php"> <button class="btn btn-outline-success" type="login">Login</button></a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" data-search id="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>