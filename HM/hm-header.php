<?php require '../hm-backend/db-connect.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hostel-Management-System</title>

    <link href="assets/css/student-font.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link rel="stylesheet" href="assets/css/styles-nav.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-0">
      
      <!-- ✅ Logo - top left corner without spacing -->
      <a href="index.php" class="navbar-brand d-flex align-items-center ml-2">
        <img src="assets/images/logo1.jpg" style="height: 50px; margin-right: 10px;">
        <span class="text-light">HOSTEL MANAGEMENT</span>
      </a>

      <!-- Toggler for mobile -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- ✅ Wrap only nav items inside container to preserve spacing -->
      <div class="collapse navbar-collapse justify-content-end pr-3" id="navbarTogglerDemo01">
        <ul class="navbar-nav mt-2 mt-lg-0">
          <li class="nav-item px-2">
            <a class="nav-link" href="home.php">Home</a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link" href="room-allocation.php">Room Allocation</a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link" href="hm-messages.php">Messages</a>
          </li>

          <li class="nav-item dropdown px-2">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Rooms <b class="caret"></b></a>
            <ul class="dropdown-menu agile_short_dropdown">
              <li><a href="alloted-rooms.php">Allocated Rooms</a></li>
              <li><a href="empty-rooms.php">Empty Rooms</a></li>
              <li><a href="vacate-room.php">Vacate Rooms</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown px-2">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
              <?php echo $_SESSION['username']; ?> <b class="caret"></b>
            </a>
            <ul class="dropdown-menu agile_short_dropdown">
              <li><a href="profile.php">My Profile</a></li>
              <li><a href="../hm-backend/logout-hm.php">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>

