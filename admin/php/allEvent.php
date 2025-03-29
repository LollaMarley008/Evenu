<?php
  session_start();
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);

  // echo if there is something in the session variables

  if(isset($_SESSION["success"])){
    echo "<script> alert('". $_SESSION["success"]."') </script>";
    unset($_SESSION["success"]);
  }else if(isset($_SESSION["failure"])){
    echo "<script> alert('".$_SESSION["failure"]."') </script>";
    unset($_SESSION["failure"]);
  }

  require_once "../../authentication/php/dbconn.php";
  
  $stmt = $conn->prepare("SELECT * FROM events WHERE status = 'pending' ");
  $stmt->execute();
  
  $events = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
      <a href="addEvent.php"><i class="bi bi-calendar-plus me-2"></i> Add Event</a>
      <a href="addService.php"><i class="bi bi-plus-circle me-2"></i> Add Service</a>
      <a href="#" class="active"><i class="bi bi-calendar-check me-2"></i> All Events</a>
      <a href="allService.php"><i class="bi bi-list-check me-2"></i> All Services</a>
      <a href="booking.php"><i class="bi bi-journal-text me-2"></i> Bookings</a>
      <a href="../../index.php"><i class="bi bi-box-arrow-right me-2"></i> Logout</a>
  </div>

  <!-- Right Section Content -->

  <div class="content bg-white rounded">
    <h4 class="mb-5 mt-5">All Events</h4>
    <table class="table table-bordered table-hover">
        <thead class="table-light">
            <tr>
                <th>Event ID</th>
                <th>Event Name</th>
                <th>Location</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
       
        <?php foreach ($events as $event): ?>
  <tr>
    <td><?php echo $event['id']; ?></td>
    <td><?php echo $event['name']; ?></td>
    <td><?php echo $event['location']; ?></td>
    <!-- Action buttons -->
    <td class="d-flex justify-content-center">
      <!-- Accept Button -->
      <form action="accept_event.php" method="POST" class="m-0">
        <input type="hidden" name="event_id" value="<?php echo $event['id']; ?>">
        <button type="submit" class="btn btn-success text-white">
          Accept <i class="bi bi-check-circle"></i>
        </button>
      </form>

      <!-- Delete Button -->
      <form action="delete_event.php" method="POST" class="m-0 ms-2">
        <input type="hidden" name="event_id" value="<?php echo $event['id']; ?>">
        <button type="submit" class="btn btn-danger text-white">
          Delete <i class="bi bi-trash"></i>
        </button>
      </form>
    </td>
  </tr>
<?php endforeach; ?>

        </tbody>
    </table>
</div>
  

  <script src="script/script.js"></script>

</body>
</html>
