<?php

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
    }
  }  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Booking Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/home.css">
  </head>
<body>
  <!-- Header -->
  <div class="header">
    <div class="left-section">
      <h5 class="mb-0 fs-2">Evenu</h5>
      <span class="hamburger" id="hamburger-menu"><i class="bi bi-list"></i></span>
    </div>
    <div class="right-section">
      <div class="admin-info d-flex align-items-center">
        <img src="../../assets/images/admin.png" class="rounded-circle" alt="Admin">
        <div class="name">
          <h6 class="mb-0">Evenu Admin</h6>
        </div>
      </div>
      <!-- <span class="logout-icon"><i class="bi bi-box-arrow-right"></i></span> -->
    </div>
  </div>
  <!-- Sidebar -->
  <div class="sidebar" id="sidebar">
      <div class="d-flex align-items-center mb-2 mt-3 m-2">
        <img src="../../assets/images/admin.png" class="rounded-circle me-2" alt="Admin">
        <div>
          <h5 class="mb-0 fs-6">Evenu Admin</h5>
        </div>
      </div>
      <a href="../index.php"><i class="bi bi-house-door me-2"></i> Dashboard</a>
      <a href="#" class="active"><i class="bi bi-calendar-plus me-2"></i> Add Event</a>
      <a href="addService.php"><i class="bi bi-plus-circle me-2"></i> Add Service</a>
      <a href="allEvent.php"><i class="bi bi-calendar-check me-2"></i> All Events</a>
      <a href="allService.php"><i class="bi bi-list-check me-2"></i> All Services</a>
      <a href="booking.php"><i class="bi bi-journal-text me-2"></i> Bookings</a>
      <a href="../../index.php"><i class="bi bi-box-arrow-right me-2"></i> Logout</a>
  </div>

  <!-- Right Section Content -->
  <div class="content bg-white rounded ">
    <h4 class="mb-5 mt-5">Add Event</h4>
    <form class="" method="post">

      <div class="form-input mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" id="name" name="name" placeholder="Your Name" class="form-control">
          <span class="text-danger"><?php echo $nameError; ?></span>
      </div>

      <div class="form-input mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="text" id="email" name="email" placeholder="Your Email" class="form-control">
          <span class="text-danger"><?php echo $emailError; ?></span>
      </div>

        <!-- Event Name -->
        <div class="mb-3">
            <label for="event" class="form-label">Event</label>
            <input type="text" class="form-control" id="event" placeholder="Event" name="event">
            <span class="text-danger"><?php echo $nameError; ?></span>
        </div>


        <!-- Location -->
        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" class="form-control" id="location" placeholder="Enter event location" name="location">
            <span class="text-danger"><?php echo $locationError; ?></span>
        </div>

        <!-- Details -->
        <div class="mb-3">
            <label for="details" class="form-label">Details</label>
            <textarea class="form-control" id="details" rows="4" placeholder="Enter event description" name="details"></textarea>
            <span class="text-danger"><?php echo $detailError; ?></span>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
  </div>
  

  <script src="script/script.js"></script>

</body>
</html>
