<?php

  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  $emailError = $passwordError = "";

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($email)){
      $emailError = "Enter your email";
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $emailError = "Enter a valid email";
    }

    if(empty($password)){
      $passwordError = "Enter your password";
    }

    if (empty($emailError) && empty($passwordError)){
      require_once "dbconn.php";

      $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email AND password = :password");
      
      $stmt->bindParam(':email',$email);
      $stmt->bindParam(':password',$password);

      $stmt->execute();

      $user = $stmt->fetch();

      if($user){
        if($user['role'] == 'admin'){
          header("location: ../../admin/index.php");
        }elseif($user['role'] == 'client'){
          header("location: ../../client/php/home.php");
        }
        exit();
      }else{
       $passwordError = "Invalid email or password";
      }
    }  
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>

  <div class="container">
    <h2 class="text-center">Login</h2>
    <form action="" method="POST">
      <div class="mt-3">
        <input type="text" name="email" placeholder="Email" class="form-control">
        <span class="text-danger"><?php echo $emailError; ?></span>
      </div>
      <div class="mt-3">
        <input type="password" name="password" placeholder="Password" class="form-control">
        <span class="text-danger"><?php echo $passwordError; ?></span>
      </div>
      <button type="submit" class="btn btn-primary w-100 mt-3">Login</button>
    </form>
    <p class="mt-3 text-center">Don't have an account? <a href="register.php" class="text-decoration-none">Register</a></p>
    <p class="mt-2 text-center"><a href="forgotPassword.php" class="text-decoration-none">Forgot Password?</a></p>
  </div>
  
</body>
</html>
