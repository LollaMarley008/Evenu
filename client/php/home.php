<?php

  require __DIR__ ."/../../config/mail.php";

  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  $nameError = $emailError = $eventError = $locationError = $detailError = "";

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $event = $_POST['event'];
    $location = $_POST['location'];
    $details = $_POST['details'];

  

    if(empty($name)){
      $nameError = "Enter event name";
    }

    if(empty($email)){
      $emailError = "Enter email";
    }

    if(empty($event)){
      $eventError = "Enter your event";
    }

    if(empty($location)){
      $locationError = "Enter your event location";
    }


    if(empty($details)){
      $detailError = "Enter a description of your event";
    }

    if(empty($nameError) && empty($emailError) && empty($eventError) && empty($locationError) && empty($detailError)){
      require "../../authentication/php/dbconn.php";

      $status = "pending";

      $setTable = $conn->prepare("INSERT INTO events(name,email,event,location,details,status) VALUES(:name,:email,:event,:location,:details,:status)");

     $execute =  $setTable->execute([
        "name" => $_POST["name"],
        "email" => $_POST["email"],
        "event" => $_POST["event"],
        "location" => $_POST["location"],
        "details" => $_POST["details"],
        "status" => $status
      ]);

      header("Location: message.php");
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

  <nav class="navbar navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand text-brand" href="#">Eve<span class="text-b">nu</span></a>
    
      <div class="justify-content-center">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link " href="../../index.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="service.php">Services</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="decoration.php">Decoration</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="about.php">About Us</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="contact.php">Contact</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="#">Booking</a>
          </li>
        </ul>
      </div>
      <div class="buttons">
        <a href="../../index.php" class="btn button">Logout</a>
      </div>
    </div>
  </nav>
  
  <div class="container" style="padding-top: 200px;">
  <h2>Book Your Event</h2>
    <div class="row">
      <div class="col">
        <img src="../../assets/images/logo.png" style="height: 500px; width: 100%;" alt="">
      </div>
        <div class="form-cont">
            <div class="col">
            <form id="bookingForm" method="post">
            <div class="form-input">
              <input type="text" id="name" name="name" placeholder="Your Name" class="form-control">
              <span class="text-danger"><?php echo $nameError; ?></span>
            </div>
            <div class="form-input">
              <input type="text" id="email" name="email" placeholder="Your Email" class="form-control">
              <span class="text-danger"><?php echo $emailError; ?></span>
            </div>
            <div class="form-input">
              <input type="text" id="event" name="event" placeholder="Your Event" class="form-control">
              <span class="text-danger"><?php echo $eventError; ?></span>
            </div>
            <div class="form-input">
              <input type="text" id="location" name="location" placeholder="Your Location" class="form-control">
              <span class="text-danger"><?php echo $locationError; ?></span>
            </div>
            <div class="form-input">
              <textarea id="details" name="details" rows="4" placeholder="Event Details" class="form-control"></textarea>
              <span class="text-danger"><?php echo $detailError; ?></span>
            </div>

            <button type="submit" class="btn btn-a btn-w mt-5">Submit Booking</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <br><br><br><br>

  <footer class="footer">
    <div class="container">
        <div class="row">
            <!-- About Evenu -->
            <div class="col-md-4">
                <h2>Evenu</h2>
                <p style="font-size:17px;">Effortlessly plan and manage your events with confidence. From conferences and weddings to corporate gatherings, Evenu provides intuitive tools and real-time insights to ensure every detail is perfect.</p>
                <p style="font-size:17px;">Phone: <strong>+237 650 892 022</strong></p>
                <p style="font-size:17px;">Email: <strong><a href="mailto:evenu@gmail.com">evenu@gmail.com</a></strong></p>
            </div>
            
            <!-- Services -->
            <div class="col-md-4">
                <h2>Our Services</h2>
                <ul class="list-unstyled">
                    <li>
                      <i class="bi bi-chevron-right text-success"></i>
                      <a href="#">Site Map</a>
                    </li>
                    <li>
                      <i class="bi bi-chevron-right text-success"></i>
                      <a href="#">Legal</a>
                    </li>
                    <li>
                      <i class="bi bi-chevron-right text-success"></i>
                      <a href="#">Agent Admin</a>
                    </li>
                    <li>
                      <i class="bi bi-chevron-right text-success"></i>
                      <a href="#">Careers</a>
                    </li>
                    <li>
                      <i class="bi bi-chevron-right text-success"></i>
                      <a href="#">Affiliate</a>
                    </li>
                    <li>
                      <i class="bi bi-chevron-right text-success"></i>
                      <a href="#">Privacy Policy</a>
                    </li>
                </ul>
            </div>

            <!-- Events -->
            <div class="col-md-4">
                <h2>Events</h2>
                <ul class="list-unstyled">
                    <li>
                      <i class="bi bi-chevron-right text-success"></i>
                      <a href="#">Yaoundé</a>
                    </li>
                    <li>
                      <i class="bi bi-chevron-right text-success"></i>
                      <a href="#">Douala</a>
                    </li>
                    <li>
                      <i class="bi bi-chevron-right text-success"></i>
                      <a href="#">Buea</a>
                    </li>
                    <li>
                      <i class="bi bi-chevron-right text-success"></i>
                      <a href="#">Baffoussam</a>
                    </li>
                    <li>
                      <i class="bi bi-chevron-right text-success"></i>
                      <a href="#">Limbe</a>
                    </li>
                    <li>
                      <i class="bi bi-chevron-right text-success"></i>
                      <a href="#">Nkonsamba</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="mb-2 d-flex gap-3">
                <a href="#">Home</a> 
                <a href="#">About</a> 
                <a href="#">Property</a> 
                <a href="#">Blog</a> 
                <a href="#">Contact</a>
            </div>
            <div class="social-icons">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
        <div class="d-flex justify-content-center align-items-center b">
          <p style="font-size: 17px;">© Copyright <strong>EvenuAgency</strong> All Rights Reserved.</p>
          <p style="font-size: 17px;">Designed by <strong>CHUADEU GABRIELLA</strong></p>
        </div>
    </div>
</footer>

<!-- Scroll to Top Button -->
<div class="scroll-top" onclick="scrollToTop()">&#8593;</div>

<script>
    function scrollToTop() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    }
</script>


  
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  
</body>
</html>