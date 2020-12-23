<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Επεξεργασία HAR αρχείου</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css">

  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="../css/har-process.css">

</head>

<body>

  <div class="d-flex toggled" id="wrapper">

    <!-- Sidebar -->
    <div class=" border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"><b>MENU</b></div>
      <div class="list-group " id="list">
      <br>
        <a href="user.php" class="list-group-item"">Αρχική Σελίδα</a>
        
        <a href="#" class="list-group-item"">Services</a>
        
        <a href="#" class="list-group-item"">Clients</a>
       
        <a href="#" class="list-group-item"">Contact</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper" >

      <nav class="navbar navbar-default">
      <span style="color:white;font-size:30px;cursor:pointer" id="menu-toggle">&#9776; </span>
        
        <div class="right">
      <a href="logout.php">Αποσύνδεση</a>
      
    </div>
    </nav>
       
     

      <div class="container-fluid">
        Παρακαλούμε επιλέξτε το αρχείο .har που θέλετε επεξεργαστείτε πατώντας εδώ:      <input type='file' id='fileinput' accept=".har"
     onclick="hide();">.
    <br><br>Το αρχείο περιέχει <a href='#bot'> ευαίσθητα δεδομένα</a>. Αν επιθυμείτε να συνεχίσετε πρέπει να πατήσετε <input type='button' id='btnProcess' 
    value='Επεξεργασία' onclick='ProcFile();'>.
    <div id="btnsave" class="btnsave">
      <br> Για αποθήκευση του αρχείου τοπικά, πατήστε εδώ: <input type='button' id='btnSave' value='Αποθήκευση' >.
      <br><br> Για να ανεβάσετε το αρχείο στο σύστημα, συνεχίστε πατώντας  <button type='submit' id='btnUpload'>Μεταφόρτωση</button>.
    </div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->
  <footer>
    <p id='bot'>Τα HAR αρχεία περιέχουν ευαίσθητα δεδομένα!</p>
    <ul>
      <li>περιεχόμενο των σελίδων που κατεβάσατε κατά την καταγραφή.</li>
      <li>τα αρχεία cookies σας, τα οποία επιτρέπουν σε οποιονδήποτε έχει πρόσβαση στο αρχείο HAR να εκμεταλεύεται τον λογαριασμό σας.</li>
      <li>όλες τις πληροφορίες που υποβάλατε κατά την εγγραφή: προσωπικά στοιχεία, κωδικοί πρόσβασης, αριθμοί πιστωτικών καρτών ...</li>
    </ul>
  </footer>
  <!-- Bootstrap core JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js"></script>

  <script src="../js/harprocess.js" type="text/javascript"> </script>
 <!-- <script src="../js/userupload.js"></script> -->

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>