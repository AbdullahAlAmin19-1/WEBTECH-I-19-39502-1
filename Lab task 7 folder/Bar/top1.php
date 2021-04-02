<!DOCTYPE html>
<html>
<head>
</head>
<body>
	
<header>
<div class="container-fluid">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary padding" style="padding: 15px 15px">
      <div class="col-xl-5 col-lg-2 col-12"><img class="logo" style="width: 120px" src="Uploads/modern_medical.png" alt="Profile Picture">
      </div>
  
  <div class="col-xl-7 col-lg-10 col-12">
    <div class="navbar-nav">
      <p class="nav-link"><?php echo "Logged in as ".$_SESSION['category']."|| ".$_SESSION['name']."||"; ?></p>
      <a class="nav-link" href="welcome.php">Home</a>
      <a class="nav-link" href="doctor.php">Doctor</a> 
      <a class="nav-link" href="patient.php">Patient</a>
      <a class="nav-link" href="viewProfile.php">View Profile</a> 
      <a class="nav-link" href="Controller/logout.php">Logout</a>
    </div>
  </div>
</nav>
  </div>
</div>
</header>
<br>
</body>
</html>