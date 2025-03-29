<?php

  $emailError = "";

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST['email'];

    if(empty($email)){
      $emailError = "Enter your email";
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $emailError = "Enter a valid email";
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
    <h2 class="text-center">Forgot Password</h2>
    <form action="" method="POST">
      <div class="mt-3">
        <input type="text" name="email" placeholder="Enter your email" class="form-control">
        <span class="text-danger"><?php echo $emailError; ?></span>
      </div>
      <button type="submit" class="btn btn-primary w-100 mt-3">Reset Password</button>
    </form>
    <p class="text-center mt-3"><a href="login.php" class="text-decoration-none">Back to Login</a></p>
  </div>
  
</body>
</html>