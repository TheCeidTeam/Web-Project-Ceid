<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Προφίλ χρήστη</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  position: relative;
  background-color: #f16051;
  padding: 20px;
  font-size: 30px;
  
  
}

h1{
  position:absolute;
  color: white;
  left: 650px;
  top: 0;
}

nav {
    -webkit-flex: 1;
    -ms-flex: 1;
    flex: 1;
    background: rgb(252, 251, 251);
    padding: 300px;
    
  
  }



/* Style the footer */
footer {
  background-color: #808080;
  padding: 10px;
  text-align: center;
  color: white;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #808080;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: white;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: white;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}


</style>
</head>
<body>



<header>
  <h1>User interface</h1>


<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="../harprocess.html" target='_self'>Επεξεργασία HAR αρχείου</a>
  <br><a href="#">Services</a>
  <br><a href="#">Clients</a>
  <br><a href="#">Contact</a>
</div>

<span style="color:white;font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>




<form align="right" name="form1" method="post" action="logout.php">
  <label class="logoutLblPos">
  <input name="submit2" type="submit" id="submit2" value="log out">
  </label>
</form>
</header>
<nav></nav>

<footer>
  <p>Bottom part</p>
</footer>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
</body>
</html>
