<?php

  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  $nameError = $locationError = $descriptionError = "";

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $location = $_POST['location'];
    $description = $_POST['description'];

    if(empty($name)){
      $nameError = "Enter event name";
    }

    if(empty($location)){
      $locationError = "Enter location";
    }

    if(empty($description)){
      $descriptionError = "Enter a description of your event";
    }

    if(empty($nameError) && empty($locationError) && empty($descriptionError)){
      require "../../authentication/php/dbconn.php";

      $setTable = $conn->prepare("INSERT INTO events(name,location,description) VALUES(:name,:location,:description)");

      $setTable->execute([
        "name" => $_POST["name"],
        "location" => $_POST["location"],
        "description" => $_POST["description"]
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
        <!-- Event Name -->
        <div class="mb-3">
            <label for="event-name" class="form-label">Event Name</label>
            <input type="text" class="form-control" id="event-name" placeholder="Enter event name" name="name">
            <span class="text-danger"><?php echo $nameError; ?></span>
        </div>

        <!-- Location -->
        <div class="mb-3">
            <label for="location" class="form-label">Location</label>
            <input type="text" class="form-control" id="location" placeholder="Enter event location" name="location">
            <span class="text-danger"><?php echo $locationError; ?></span>
        </div>

        <!-- Description -->
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" rows="4" placeholder="Enter event description" name="description"></textarea>
            <span class="text-danger"><?php echo $descriptionError; ?></span>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
  </div>
  

  <script src="script/script.js"></script>

</body>
</html>
