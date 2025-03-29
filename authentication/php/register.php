<?php

  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  $nameError = $emailError = $passwordError = $password2Error = "";

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    if(empty($name)){
      $nameError = "Enter your name";
    }

    if(empty($email)){
      $emailError = "Enter your email";
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $emailError = "Enter a valid email";
    }

    if(empty($password)){
      $passwordError = "Enter your password";
    }elseif(strlen($password) < 8){
      $passwordError = "Password must be atleast 8 character";
    }

      echo $password;
    if(empty($password2)){
      $password2Error = "Repeat password";
    }elseif($password !== $password2){
      $password2Error = "Password must match";
    }

    if(empty($nameError) && empty($emailError) && empty($passwordError) && empty($password2Error)){
      require "dbconn.php";


      $setTable = $conn->prepare("INSERT INTO users(name,email,password) VALUES(:name,:email,:password)");

      $setTable->execute([
        "name" => $_POST["name"],
        "email" => $_POST["email"],
        "password" => $_POST["password"]
      ]);

      header('location: login.php');
    }
  }  

?>

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- bootstrap CSS && JS links -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>

  <div class="container">
    <h2>Register</h2>
    <form action="" method="POST">
        <div class="mt-3">
          <input type="text" name="name" placeholder="Name" class="form-control">
          <span class="text-danger"><?php echo $nameError; ?></span>
        </div>
        <div class="mt-3">
          <input type="text" name="email" placeholder="Email" class="form-control">
          <span class="text-danger"><?php echo $emailError; ?></span>
        </div>
        <div class="mt-3">
          <input type="password" name="password" placeholder="Password" class="form-control">
          <span class="text-danger"><?php echo $passwordError; ?></span>
        </div>
        <div class="mt-3">
          <input type="password" name="password2" placeholder="Confirm Password" class="form-control">
          <span class="text-danger"><?php echo $password2Error; ?></span>
        </div>
        <button type="submit" class="btn btn-primary w-100 mt-3">Register</button>
    </form>
    <p class="mt-2">Already have an account? <a href="login.php" class="text-decoration-none">Login</a></p>
  </div>
  
</body>
</html>