
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Αρχική Σελίδα</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css">

  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="../css/user-css.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

  <div class="d-flex toggled" id="wrapper">

    <!-- Sidebar -->
    <div class=" border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"><b>MENU</b></div>
      <div class="list-group " id="list">
      <br>
        <a href="harprocess2.php" class="list-group-item">Επεξεργασία HAR αρχείου</a>
        
        <a href="user-IPs.php" class="list-group-item">Heatmap</a>
        
        <a href="#" class="list-group-item"">Clients</a>
       
        <a href="#" class="list-group-item"">Contact</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-default">
       <span style="color:white;font-size:30px;cursor:pointer" id="menu-toggle">&#9776; </span>
        
       <div class="dropdown-container">
         <div class="dropdown" style="float:right;">
         <a onclick="myFunction()" class='drop'> <i class="fa fa-caret-down" aria-hidden="false"></i></a>
           <div id="myDropdown" class="dropdown-content" style="right:0;">
               <a href="profile-settings.php"><i class="fa fa-cog" aria-hidden="true"></i> Ρυθμίσεις</a>
               <a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Αποσύνδεση</a>

           </div>
         </div>
       </div>
      </nav>
       
    <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.fa')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

      <div class="container-fluid">
        <h1 class="mt-4">Simple Sidebar</h1>
        <p>The starting state of the menu will appear collapsed on smaller screens, and will appear non-collapsed on larger screens. When toggled using the button below, the menu will change.</p>
        <p>Make sure to keep all page content within the <code>#page-content-wrapper</code>. The top navbar is optional, and just for demonstration. Just create an element with the <code>#menu-toggle</code> ID which will toggle the menu when clicked.</p>
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

</body>

</html>