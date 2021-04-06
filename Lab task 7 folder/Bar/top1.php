<!DOCTYPE html>
<html>
<head>
</head>
<body>
	
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="col-xl-5 col-lg-3 col-12">
      	<img class="logo" src="Uploads/modern_medical.png" alt="Profile Picture">
      </div>
  
  <div class="col-xl-7 col-lg-9 col-12">
    <div class="navbar-nav">
      <p class="nav-link"><?php echo "Logged in as ".$_SESSION['category']."|| ".$_SESSION['name']."||"; ?></p>
      <a class="nav-link" href="welcome.php"><i class="fas fa-home"></i>Home</a>
      <a class="nav-link" href="doctor.php"><i class="fas fa-user-md"></i>Doctor</a> 
      <a class="nav-link" href="patient.php"><i class="fas fa-user-injured"></i>Patient</a>
      <a class="nav-link" href="viewProfile.php"><i class="fas fa-id-badge"></i>View Profile</a> 
      <a class="nav-link" href="Controller/logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
    </div>
  </div>
</nav>
</header>
<br>
</body>
</html>