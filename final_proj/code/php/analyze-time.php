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
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

  <title>Hardb</title>
  <!-- Bootstrap core CSS -->

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css">

  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="../css/admin-time-css.css">

</head>

<body>
  <div class="d-flex toggled" id="wrapper">

    <!-- Sidebar -->
    <div class=" border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"><b>MENU</b></div>
      <div class="list-group " id="list">
      <br>
        <a href="admin-stats.php" class="list-group-item"">Στατιστικά</a>
        
        <a href="analyze-time.php" class="list-group-item"">Χρόνος απόκρισης </a>
        
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

        <p>Παρακαλώ ορίστε τις παραμέτρους για το γράφημα των χρόνων ανάλυσης</p>
              <br>
        <br>

        <div id="content-wrapper"> 

        <h3 class="mt-4">Content Type</h3>

      <div id="checks"> 
        
        </div>

        <h3 class="mt-4">Ημέρα</h3>
        <div id="checkday"> 

        <input class= 'checkbox-inline' type="checkbox" id="day" name="Monday" value="Monday">
        <label for="Monday"> Δευτέρα</label>

        <input class= 'checkbox-inline' type="checkbox" id="day" name="Tuesday" value="Tuesday">
        <label for="Tuesday"> Τρίτη</label>

        <input class= 'checkbox-inline' type="checkbox" id="day" name="Wednesday" value="Wednesday">
        <label for="Wednesday"> Τετάρτη</label>

        <input class= 'checkbox-inline' type="checkbox" id="day" name="Thursday" value="Thursday">
        <label for="Thursday"> Πέμπτη</label>

        <input class= 'checkbox-inline' type="checkbox" id="day" name="Friday" value="Friday">
        <label for="Friday"> Παρασκευή </label>

        <input class= 'checkbox-inline' type="checkbox" id="day" name="Saturday" value="Saturday">
        <label for="Saturday"> Σάββατο</label>
        <input class= 'checkbox-inline' type="checkbox" id="day" name="Sunday" value="Sunday">
        <label for="Sunday"> Κυριακή</label>
        </div>

        <h3 class="mt-4">HTTP μέθοδος</h3>

        
        <div id="checkmethod"> 
    
        
        </div>
        <h3 class="mt-4">Πάροχος συνδεσιμότητας</h3>
        <div id="checkparoxo"> 
        </div>
        
        </div>
        <button id ="submitButton" >Επίδειξη διαγράμματος</button>
        <br>
        <br>
        <i id="myfaicon" class="fa fa-spinner fa-2x fa-fw fa-spin" style="opacity:0"></i>

        <br>
        <br>
        <canvas id="mychart1"></canvas>

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js" integrity="sha512-ttHne44lbbucAUVjyStgbDTTqvNVQdIGN9gqZeai69i4OXSDNjlBd1tyCVXI/a/DqITpj9gXi84dcyG2vz4jhw==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

<script src="../js/admin-time.js"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>

</body>

</html>