<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Booking Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/home.css">
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
        <img src="../assets/images/admin.png" class="rounded-circle" alt="Admin">
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
        <img src="../assets/images/admin.png" class="rounded-circle me-2" alt="Admin">
        <div>
          <h5 class="mb-0 fs-6">Evenu Admin</h5>
        </div>
      </div>
      <a href="#" class="active"><i class="bi bi-house-door me-2"></i> Dashboard</a>
      <a href="php/addEvent.php"><i class="bi bi-calendar-plus me-2"></i> Add Event</a>
      <a href="php/addService.php"><i class="bi bi-plus-circle me-2"></i> Add Service</a>
      <a href="php/allEvent.php"><i class="bi bi-calendar-check me-2"></i> All Events</a>
      <a href="php/allService.php"><i class="bi bi-list-check me-2"></i> All Services</a>
      <a href="php/booking.php"><i class="bi bi-journal-text me-2"></i> Bookings</a>
      <a href="../index.php"><i class="bi bi-box-arrow-right me-2"></i> Logout</a>
  </div>

  <!-- Right Section Content -->
  <div class="content">
    <h4 class="mb-4 mt-4">Dashboard</h4>
    <div class="row">
      <!-- Today's Bookings Card -->
      <div class="col-md-4">
        <div class="card card-red p-3">
            <h5>Today's Bookings</h5>
            <h2>4</h2>
        </div>
      </div>
      <!-- Weekly Bookings Card -->
      <div class="col-md-4">
          <div class="card card-blue p-3">
              <h5>Weekly Booking</h5>
              <h2>10</h2>
          </div>
      </div>
      <!-- Monthly Bookings Card -->
      <div class="col-md-4">
          <div class="card card-green p-3">
              <h5>Monthly Booking</h5>
              <h2>50</h2>
          </div>
      </div>
      </div>

      <!-- Recent Bookings Table -->
      <div class="mt-4 mb-4 bg-white rounded p-4">
        <h5>Recent Bookings</h5>
        <table class="table table-bordered table-hover">
          <thead class="table-light">
            <tr>
              <th>Customers</th>
              <th>Event</th>
              <th>Status</th>
              <th>Booking Date</th>
              <th>Tracking ID</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><img src="../assets/images/admin.png" class="rounded-circle me-2" alt="User"> Babila</td>
              <td>Mariage Event</td>
              <td><span class="badge bg-success">DONE</span></td>
              <td>May 10, 2024</td>
              <td>WD-12345</td>
            </tr>
            <tr>
              <td><img src="../assets/images/admin.png" class="rounded-circle me-2" alt="User"> Eliane</td>
              <td>Conference</td>
              <td><span class="badge bg-warning text-dark">PENDING</span></td>
              <td>June 15, 2024</td>
              <td>WD-67890</td>
            </tr>
            </tbody>
      </table>
    </div>
  </div>

  <script src="script/script.js"></script>

</body>
</html>
