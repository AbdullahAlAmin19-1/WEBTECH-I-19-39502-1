<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="CSS3/style.css">
<link rel="stylesheet" href="CSS3/bootstrap.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
	
<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="navbar-brand">
      <img class="logo" src="Uploads3/modern_medical.png" alt="Profile Picture">
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <p class="nav-link"><?php echo "Logged in as ".$_SESSION['category']."|| ".$_SESSION['name']."||"; ?></p>
      <a class="nav-link" href="welcome3.php"><i class="fas fa-home"></i>Home</a>
      <a class="nav-link" href="showPrescription3.php"><i class="fas fa-prescription-bottle-alt"></i>My Prescription</a> 
      <a class="nav-link" href="showPayment3.php"><i class="fa fa-credit-card"></i>Patient Payment</a> 
      <a class="nav-link" href="viewProfile3.php"><i class="fas fa-id-badge"></i>View Profile</a> 
      <a class="nav-link" href="Controller3/logout3.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
    </div>
    </div>
  </nav>
</header>
<br>
</body>
</html>