<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="CSS/style1.css">
<link rel="stylesheet" href="CSS/bootstrap.css">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
</head>
<body>
	<header>
    <nav class="navbar navbar-expand-sm navbar-light padding" style="background-color: #0dcaf0; padding: 10px 10px;">
      <div class="navbar-brand">
      	<img class="logo" style="width: 100px" src="Photos/Logo.png" alt="Logo"> 
      </div>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
    <div class="navbar-nav">
    <a class="nav-link" href="Welcome1.php"><i class="fas fa-home"></i>Home</a>
    <a class="nav-link" href="Search1.php"><i class="fas fas fa-search"></i>Search</a>
    <a class="nav-link" href="AddUser1.php"><i class="fas fa-user-plus"></i>Add User</a>
    <a class="nav-link" href="UserDetails1.php"><i class="fas fa-info-square"></i>Details</a>
    <a class="nav-link" href="Approve1.php"><i class="fas fa-user-check"></i>Approval</a>
    <a class="nav-link" href="ViewProfile1.php"><i class="fas fa-id-badge"></i>Profile</a>
	  <a class="nav-link" href="Logout1.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
    </div>
  </div>
</nav>
<div style="float: right;">
  <h5 style="font-family:Times New Roman;"><b><i><?php echo "Logged In As Admin" ?> <?php echo " || ".$_SESSION['user_name']."  "; ?></i></b></h5>
</div><br><br>
</header>

</body>
</html>