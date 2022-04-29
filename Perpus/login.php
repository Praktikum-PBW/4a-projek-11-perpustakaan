<?php 
include "auth.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <link rel="icon" href="assets/img/logo.png" type="png">
    <link href="./assets/style/style.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Perpustakaan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form method="post">
    <img class="mb-4" src="./assets/img/logo1.png" alt="Logo" width="350" height="340">
    <h3 class="h3 mb-3 fw-normal" style="color:white;"><strong>Perpustakaan</strong></h3>
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username" required>
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required>
      <label for="floatingPassword">Password</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="Login">Login</button>
    <p style="color:white;">Belum memiliki akun ?<a href="register.php"> Registrasi </a></p>
    <p class="mt-5 mb-3 text-muted">&copy; 2022 Perpustakaan</p>
  </form>
</main>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>