<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aed4All Home</title>
    <link rel="stylesheet" href="../main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <script src="main.js"></script>
</head>
<body>
    <nav id="navbar">
        <img class="logo" id="logo" src="../img/newlogo.png" alt="logo" width="120" height="70">
        <a href="../aboutus.php"><i class="fas fa-user"></i> About us</a>
        <a href="../knowledge.php"><i class="fas fa-info"></i> Knowledge</a>
        <a href="../addaed.php"><i class="fas fa-plus"></i> Add AED</a>
        <a href="../main.php"><i class="fas fa-home"></i> Home</a>
    </nav>
    
    <div class="dropdown">
        <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Filter</button>
        <div class="dropdown-menu dropdown-danger">
            <h6 class="dropdown-header">Date & Time</h6>
            <a class="dropdown-item" href="../main.php">All</a>
            <a class="dropdown-item" href="normal.php">Mon - Fri</a>
            <a class="dropdown-item" href="holiday.php">Sat - Sun</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Tourist Attractions</h6>
            <a class="dropdown-item" href="niman.php">Niman</a>
            <a class="dropdown-item" href="chaingmai_wall.php">Old City</a>
        </div>
    </div>
    
    
    
    
    
    <iframe class="map" src="https://www.google.com/maps/d/embed?mid=1QB75FC1MToPVYbP6yZKjMl9_CMXG3DSp" width="90%" height="720"></iframe>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

<!-- Footer -->
<footer class="page-footer font-small blue">

    <!-- Copyright -->
    <br><br><br>
    <div class="footer-copyright text-center py-3">© 2020 Copyright ( For educational purpose only )
    </br>
      <a href="#">421alive.com</a>
    </div>
    <!-- Copyright -->
  
  </footer>
  <!-- Footer -->
</html>