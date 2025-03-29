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
      <a href="allEvent.php"><i class="bi bi-calendar-check me-2"></i> All Events</a>
      <a href="allService.php"><i class="bi bi-list-check me-2"></i> All Services</a>
      <a href="#" class="active"><i class="bi bi-journal-text me-2"></i> Bookings</a>
      <a href="../../index.php"><i class="bi bi-box-arrow-right me-2"></i> Logout</a>
  </div>

  <!-- Right Section Content -->

  <div class="content bg-white rounded">
    <h4 class="mb-5 mt-5">Bookings</h4>
    <table class="table table-bordered table-hover">
        <thead class="table-light">
            <tr>
                <th>Booking ID</th>
                <th>Customer Name</th>
                <th>Event Type</th>
                <th>Booking Status</th>
                <th>Amount(FCFA)</th>
                <th>Event date</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>BKG-12345</td>
                <td>John</td>
                <td>Mariage</td>
                <td>Approved</td>
                <td>100000</td>
                <td>May 15, 2024</td>
            </tr>
            <tr>
                <td>BKG-12346</td>
                <td>Peter</td>
                <td>Mariage</td>
                <td>Approved</td>
                <td>100000</td>
                <td>June 15, 2024</td>
            </tr>
            <tr>
                <td>BKG-12347</td>
                <td>lolla marley</td>
                <td>graduation</td>
                <td>Approved</td>
                <td>100000</td>
                <td>January 10, 2025</td>
            </tr>
        </tbody>
    </table>
</div>

  

  <script src="script/script.js"></script>

</body>
</html>
