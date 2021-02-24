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
  <link rel="stylesheet" href="../css/har-upload.css">

</head>

<body>

<div class="d-flex toggled" id="wrapper">

    <!-- Sidebar -->
    <div class=" border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"><b>MENU</b></div>
      <div class="list-group " id="list">
      <br>
        

        <a href="har-upload55.php" class="list-group-item">Επεξεργασία HAR αρχείου</a>

        <a href="user-IPs.php" class="list-group-item">Heatmap</a>

      
      </div>
    </div>
    <!-- /#sidebar-wrapper -->
    <div id="page-content-wrapper">
    
    <nav class=" navbar-default "> 
      <div id="left">
        <div id="help">
      <span  id="menu-toggle">&#9776; </span>
  </div>
  <a class="navbar-brand" href="har-upload55.php"> </a>

  </div>
      
        
       <div class="dropdown-container">
       <div class="right">
       
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

 <br>
     
    

<br>

<br>
<br>
      
      
     
      <div id="content-wrapper" style="height: 370px">
     
    <h2>Μεταφόρτωση HAR αρχείου</h2>
    <br>
    <label id="label1" for="fileinput">Επιλέξτε αρχείο</label>

     <input type='file' id='fileinput' accept=".har">
     <br>
     <label for="btnSave">Τοπική Αποθήκευση</label>
     <input type='button' id='btnSave' value='Save' >

    <br>
     <label for="btnLoad">Φόρτωση</label>

     <input type='button' id='btnLoad' value='Load' >
     <br>
     <i id="myfaicon" class="fa fa-spinner fa-2x fa-fw fa-spin" style="opacity:0"></i>
     <p id="ptext" style="color: black " >Παρακαλώ περιμένετε</p>


     
     </div>
    
     


</div>
<!-- container-fluid-->



     </div>
    <!-- /#page-content-wrapper -->
     </div>
  <!-- /#wrapper -->


  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js"></script>
<script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

 
  <script>
 $("#fileinput").change(function(e) {
    $("#label1").css('opacity', '0.6');

  });
  </script>
<script src="../js/har-upload55.js"></script>

</body>
</html>