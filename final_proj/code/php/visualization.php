<?php
session_start();
if (!isset($_SESSION['username'])) {
    if (!isset($_SESSION['type'])) {
	header('Location: ../index.html');
    exit();
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Hardb</title>
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css">

  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="../css/visualization-css.css">
  <link rel="stylesheet" href="../css/leaflet-beautify-marker-icon.css">

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
   <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>
</head>

<body>

  <div class="d-flex toggled" id="wrapper">

    <!-- Sidebar -->
    <div class=" border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"><b>MENU</b></div>
      <div class="list-group " id="list">
      <br>
        <a href="admin-stats.php" class="list-group-item"">Στατιστικά</a>
        
        <a href="analyze-time.php" class="list-group-item"">Χρόνος απόκρισης  </a>
        
        <a href="analyze-http.php" class="list-group-item""> HTTP Κεφαλίδες</a>
       
        <a href="visualization.php" class="list-group-item"">Οπτικοποίηση</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

    <nav class=" navbar-default "> 
    
    <div id="left">
      <div id="help">
  <span  id="menu-toggle">&#9776; </span>
  </div>
  
  <a class="navbar-brand" href="admin-stats.php"> </a>
  
  </div>
  <br>
 
 <div class="right">
    <a href="logout.php">Αποσύνδεση</a>
    <i class="fas fa-sign-out-alt"></i>

    </div>
</nav>
     

      <div class="container-fluid">

        <br>
        <br>
        <p>Εδώ  μπορείτε να δείτε στον χάρτη τις
τοποθεσίες των IPs στις οποίες έχουν αποσταλεί HTTP αιτήσεις. Συγκεκριμένα, εμφανίζεται ένας
δείκτης (marker) ανά IP, με γραμμές που συνδέουν την πόλη προέλευσης του κάθε χρήστη με κάθε
εικονίδιο. Το πάχος των γραμμών προσαρμόζεται ανάλογα με το πλήθος των αιτήσεων που έχουν
γίνει προς τη συγκεκριμένη IP</p>
<br>

        <div id="mapid"></div>
        <br>
        <br>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

<script src="https://kit.fontawesome.com/759e0d586c.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.ipwhois.io/js/ipwhois.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js"></script>
<script src="../js/leaflet-beautify-marker-icon.js"></script>
<script src="../js/visualization.js"></script>

</body>

</html>