<?php
//session_start();
//if (!isset($_SESSION['username'])) {
  //  if (!isset($_SESSION['type'])) {
	//header('Location: ../index.html');
    //exit();
    //}
//}

?>



<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Simple Sidebar - Start Bootstrap Template</title>

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
      <a href="admin.php" class="list-group-item"">Κεντρική Σελίδα </a>

        <a href="admin-stats.php" class="list-group-item"">Απεικόνιση Βασικών Πληροφοριών</a>
        
        
        <a href="analyze-http.php" class="list-group-item"">Ανάλυση κεφαλίδων HTTP</a>
       
        <a href="visualization.php" class="list-group-item"">Οπτικοποίηση δεδομένων</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-default">
      <span style="color:white;font-size:30px;cursor:pointer" id="menu-toggle">&#9776; </span>

        
        <div class="right">
      <a href="logout.php">Sign Out</a>
      
    </div>
    </nav>
       
     

      <div class="container-fluid">
        <h1 class="mt-4">Simple Sidebar</h1>
        <p>The starting state of the menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will change.</p>
        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>. The top navbar is optional, and just for demonstration. Just create an element with the <code>#menu-toggle</code> ID which will toggle the menu when clicked.</p>
        <br>
        <br>

        <p>Παρακαλώ ορίστε τις παραμέτρους για το γράφημα των χρόνων ανάλυσης:</p>

        <h1 class="mt-4">Content Type:</h1>

      <div id="checks"> 
        
        </div>


        <h1 class="mt-4">Day of the Week:</h1>
        <div id="checkday"> 

        <input class= 'checkbox' type="checkbox" id="day" name="Monday" value="Monday">
        <label for="Monday"> Monday</label><br>

        <input class= 'checkbox' type="checkbox" id="day" name="Tuesday" value="Tuesday">
        <label for="Tuesday"> Tuesday</label><br>

        <input class= 'checkbox' type="checkbox" id="day" name="Wednesday" value="Wednesday">
        <label for="Wednesday"> Wednesday</label><br>

        <input class= 'checkbox' type="checkbox" id="day" name="Thursday" value="Thursday">
        <label for="Thursday"> Thursday</label><br>

        <input class= 'checkbox' type="checkbox" id="day" name="Friday" value="Friday">
        <label for="Friday"> Friday </label><br>

        <input class= 'checkbox' type="checkbox" id="day" name="Saturday" value="Saturday">
        <label for="Saturday"> Saturday</label><br>

        <input class= 'checkbox' type="checkbox" id="day" name="Sunday" value="Sunday">
        <label for="Sunday"> Sunday</label><br>
        </div>

        <h1 class="mt-4">HTTP method:</h1>

        
        <div id="checkmethod"> 
    
        
        </div>
        <h1 class="mt-4">Πάροχος συνδεσιμότητας:</h1>
        <div id="checkparoxo"> 
      
        
        </div>
        <button id ="submitButton" >Get Results</button>
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

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js" integrity="sha512-ttHne44lbbucAUVjyStgbDTTqvNVQdIGN9gqZeai69i4OXSDNjlBd1tyCVXI/a/DqITpj9gXi84dcyG2vz4jhw==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.bundle.min.js"></script>

<script src="../js/admin-time.js"></script>

</body>

</html>