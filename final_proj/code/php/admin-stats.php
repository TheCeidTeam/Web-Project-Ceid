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
 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="../css/admin-stats-css.css">

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
    <a href="logout.php">Αποσύνδεση </a>
    <i class="fas fa-sign-out-alt"></i>
    </div>
</nav>
     

      <div  class="container-fluid">
        <h1 class="mt-4">Στατιστικά στοιχεία των εγγραφών σας </h1>
        <br>
        
        <p>Στην συνέχεια ακολουθούν γραφήματα και πίνακες ωστε να αναλυθούν τα στοιχεία των ανεβασμένων αρχείων και των χρηστών που έχουν εγγραφεί στο συστημα σας.</p>
        <br>
        <br>
        <div class="row">
        <button type="submit" class="btn btn-primary" id="submitButton">Επίδειξη στατιστικών</button>
        <select class="selectpicker" id="myselect">
           <option>Εγγεγραμμένοι χρήστες </option>
            <option>Eγγραφές ανά μέθοδο</option>
           <option>Εγγραφές ανά status</option>
           <option>Μοναδικά domain</option>
            <option>Μοναδικοί πάροχοι</option>
           <option>Ιστοαντικείμενα</option>
        </select>

     
        </div>
        <br>
        <i id="myfaicon" class="fa fa-spinner fa-2x fa-fw fa-spin"></i>

        <br>
        <br>

      
       
       
        <canvas id="mychart" style="display: none" ></canvas>
        <i class="fas fa-info-circle" id="fas" style="display: none"></i>  
        <p id="icon">Στο παραπάνω γράφημα αποτυπώνονται οι εγγραφές που υπάρχουν στο σύστημα</p> 


      
        
      
      
        <canvas id="mychart1" style="display: none" ></canvas>
        <i class="fas fa-info-circle" id="fas1"  style="display: none" ></i>  
        <p id="icon1">Στο παραπάνω γράφημα αναλύονται το πλήθος των εγγραφών στη βάση ανά τύπο (μέθοδο) αίτησης.Μπορείτε να συλλεξετε τα στοιχεία των ποιο χρησιμοποιήσιμων μεθόδων στο διαδίκτυο</p> 


      
       
       
       

        <canvas id="mychart2" style="display: none"></canvas>
        <i class="fas fa-info-circle" id="fas2"  style="display: none"></i> 
        <p id="icon2">Στο παραπάνω γράφημα παρουσιάζεται το πλήθος των εγγραφών στη βάση ανά κωδικό (status) απόκρισης.Μπορείτε να δείτε τα ποσοστά χρησιμοποίησης όλων των κωδικών απόκρισης.</p> 
        
        
        <canvas id="mychart3" style="display: none" ></canvas>
        <i class="fas fa-info-circle" id="fas3"  style="display: none"></i>
        <p id="icon3">Στο παραπάνω γράφημα απεικονίζεται το  πλήθος των μοναδικών domains που υπάρχουν στη βάση.</p>  
        
        
        
       
        
        <canvas id="mychart4" style="display: none"></canvas>
        <i class="fas fa-info-circle" id="fas4"  style="display: none"></i>  
        <p id="icon4">Στο παραπάνω γράφημα απεικονίζεται το πλήθος των μοναδικών παρόχων των χρηστών που έχουν εγγραφεί στο σύστημα.</p>
        
        
        <!--<p id="pmychart5" style="display: none">Στο παρακάτω γράφημα απεικονίζεται η μέση ηλικία των ιστοαντικειμένων τη στιγμή που ανακτήθηκαν, ανά CONTENT-TYPE</p>
       
-->
        
        <canvas id="mychart5" style="display: none" ></canvas>
       
        <i class="fas fa-info-circle"   id="fas5" style="display: none"></i>  
        <p id="icon5">Στο παραπάνω γράφημα απεικονίζεται η μέση ηλικία των ιστοαντικειμένων τη στιγμή που ανακτήθηκαν, ανά CONTENT-TYPE</p>
       
       
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js" integrity="sha512-ttHne44lbbucAUVjyStgbDTTqvNVQdIGN9gqZeai69i4OXSDNjlBd1tyCVXI/a/DqITpj9gXi84dcyG2vz4jhw==" crossorigin="anonymous"></script>
<script src="../js/admin-stats.js"></script>



</body>

</html>