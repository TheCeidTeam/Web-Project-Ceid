
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Διαχείριση Προφίλ</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css">

  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="../css/profile-settings.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>



<?php
// Start the session
session_start();
?>

    <!-- Page Content -->
    
    <div id="page-content-wrapper">

      <nav class="navbar navbar-default">
      <a onclick="location.href='user.php';" class='home'> <i class="fa fa-home" aria-hidden="false"></i></a>
        
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
       

    </div>

    <div class="container-fluid">
     <div class="leftbox">
         <nav role='sub'>
        <a onclick='tabs(0)' class='tab'>
        <i class="k fa fa-cog" aria-hidden="true"></i> 
       </a>
       <a onclick='tabs(1)' class='tab'>
        <i class="k fa fa-bar-chart" aria-hidden="true"></i> 
       </a>
      
     </div>
     </nav>
     <div class="rightbox">
        <div class="profile tabShow">
           <h1>Προσωπικές πληροφορίες</h1>
           <h2>Ψευδωνυμο</h2> 
           <input type="text" class="input" id='username' value="<?php echo $_SESSION['username'] ?? 'default' ?>">
           <br>
           <span class="error_form" id="username_error_message"></span>
           <br>
           <span class="error_form" id="username_error_message2"></span>
           <br>
           <h2>Κωδικος</h2> 
           <input type="password" class="input" id='password' value="<?php echo $_SESSION['password'] ?? 'default' ?>" >  <a class='icon' ><i id='icon' class="k fa fa-eye" aria-hidden="true"></i> </a>
           <br>
           <span class="error_form" id="password_error_message"></span>
           <br>
           <span class="error_form" id="password_error_message1"> </span>
           <br>
           <span class="error_form" id="password_error_message2"></span>
           <br>
           <button class="btn" id='updateButton'>Ενημέρωση </button>
        </div> 
        <div class="stats tabShow">
           <h1>Στατιστικά</h1>
           
        </div> 
     </div>
    </div>
<!-- /#page-content-wrapper -->



<!--Scripts-->
  
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

  
  <!--Eye Toggle-->
  <script>
    $(".icon").click(function(){
      
    if ($("#icon").attr('class') == 'k fa fa-eye') {
      $('.icon').find('i').remove();
      $(".icon").html($('<i/>',{id:'icon', class:'k fa fa-eye-slash'}));
      $('#password').prop('type', 'text');
      
    }
    else {
      $('.icon').find('i').remove();
      $(".icon").html($('<i/>',{id:'icon', class:'k fa fa-eye'}));
      $('#password').prop('type', 'password');
     
    }});
  </script>

  <!-- Tab Toggle-->
  <script>
      const tabBtn=document.querySelectorAll(".tab");
      const tab = document.querySelectorAll(".tabShow");
      function tabs(panelIndex){
          tab.forEach(function(node){
           node.style.display="none";
          });
          tab[panelIndex].style.display = "block";
      }
      tabs(0);
  </script>


  <!--Update-->
  <script>
    $(() => {


    $("#password_error_message").hide();
    $("#password_error_message1").hide();
    $("#password_error_message2").hide();
    $("#password_error_message3").hide();
    $("#username_error_message").hide();
    $("#username_error_message2").hide();
    







   var error_password = false;
   var error_username = false;



   function check_username() {
     var pattern = /^[a-zA-Z0-9]*$/;
     var fname = $("#username").val();
     if (pattern.test(fname) && fname !== '') {
        $("#username_error_message").hide();
        
     } 
     else {
        $("#username_error_message").html("Should contain only Characters and numbers");
        $("#username_error_message").show();
        
        error_username = true;
    }
   }



   function check_password() {

    var password_length = $("#password").val().length;
    var pass=$("#password").val();
    if (password_length < 8  ) {
        $("#password_error_message").html("Atleast 8 Characters");
        $("#password_error_message").show();
        //$("#passsword").css("border-bottom", "2px solid #F90A0A");
        error_password = true;


    }
    else{
        $("#password_error_message").hide();
      }
    
    if (pass.search(/[A-Z]/) === -1 ) {
        //console.log("hello");
        $("#password_error_message1").html("Atleast 1 Uppercase Character");
        $("#password_error_message1").show();
        //$("#passsword").css("border-bottom", "2px solid #F90A0A");
        error_password = true;
    }
    else{
        $("#password_error_message1").hide();
      }
    
    if (pass.search(/[!\@\#\%\^\&\*\(\)\_\-\+\=\<\>\,\?]/)  === -1 ) {
        $("#password_error_message2").html("\nAtleast 1 Special Character");
        $("#password_error_message2").show();
        //$("#passsword").css("border-bottom", "2px solid #F90A0A");
        error_password = true;
    }
    else{
       // $("#password_error_message2").hide();
      }
    
    if(error_password == false) {
        //$("#password").css("border-bottom", "2px solid #34F458");
    }
   }


$("#updateButton").on('click', (e) => {
        {

            $("#password_error_message").hide();
            $("#password_error_message1").hide();
            $("#password_error_message2").hide();
            $("#password_error_message3").hide();

            
            e.preventDefault();

            error_password = false;
            error_username=false;


            check_password();
            check_username();

            if (error_username == false && error_password === false ) {
                
                var user = {
                    password: $("#password").val(),
                    username: $("#username").val()
                }


        
                const userXHR= $.ajax({
                    url    : "user-update.php",
                    type   : "POST",
                    data   : user,
                    
                   
                    
                }).done(function(datas) {
                   console.log();
                   //window.location.href = "profile-settings.php";
                }).fail(function() {
                  
                  $("#username_error_message2").html("Username already exist")
                  $("#username_error_message2").show();
                });






                
            } else {
                console.log("Please Fill the form Correctly");
                return false;
            }


        }
    });
});

  </script>

</body>

</html>