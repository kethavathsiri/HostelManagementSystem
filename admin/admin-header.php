<?php require 'config.inc.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hostel Management System | Home</title>

    <link href="assets/css/student-font.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link rel="stylesheet" href="assets/css/styles-nav.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-0" style="height: 60px;">
      
      <!-- ✅ Logo at the top-left corner with NO extra left margin -->
      <a href="home.php" class="navbar-brand d-flex align-items-center ml-0">
        <img src="assets/images/logo.jpg" style="height: 50px; margin-right: 10px;">
        <span class="text-light">HOSTEL MANAGEMENT</span>
      </a>

      <!-- ✅ Mobile Menu Toggle -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- ✅ Nav links aligned to the right with spacing -->
      <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo01">
        <ul class="navbar-nav mt-2 mt-lg-0 pr-3">
          <li class="nav-item px-2">
            <a class="nav-link" href="home.php">Home</a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link" href="appoint.php">Appoint Hostel Managers</a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link" href="remove.php">Remove Hostel Managers</a>
          </li>
          <li class="nav-item px-2">
            <a class="nav-link" href="students.php">Students</a>
          </li>
          <li class="nav-item dropdown px-2">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <?php echo $_SESSION['f_name'] . " " . $_SESSION['l_name']; ?>
              <b class="caret"></b>
            </a>
            <ul class="dropdown-menu agile_short_dropdown">
              <li><a href="profile.php">My Profile</a></li>
              <li><a href="logout.inc.php">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>

