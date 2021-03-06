<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="CSS2/style2.css">
<link rel="stylesheet" href="CSS2/bootstrap2.css">

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
	
<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="navbar-brand">
      <img class="logo" src="Uploads2/modern_medical.png" alt="Profile Picture">
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <p class="nav-link"><?php echo "Logged in as ".$_SESSION['category']."|| ".$_SESSION['name']."||"; ?></p>
      <a class="nav-link" href="welcome2.php"><i class="fas fa-home"></i>Home</a>
      <a class="nav-link" href="showappointment2.php"><i class="fas fa-user-injured"></i>Patient Info</a> 
      <a class="nav-link" href="showPrescription2.php"><i class="fas fa-prescription-bottle-alt"></i>Prescription</a> 
      <a class="nav-link" href="viewProfile2.php"><i class="fas fa-id-badge"></i>View Profile</a> 
      <a class="nav-link" href="Controller2/logout2.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
    </div>
    </div>
  </nav>
</header>
<br>
</body>
</html>