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
<link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.css" />

<script src="http://cdn.leafletjs.com/leaflet/v0.7.7/leaflet.js"></script>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Hardb</title>
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css">

  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="../css/user-IPs-css.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
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

    <!-- Page Content -->
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
       <p> Στην συνέχεια παρουσιάζεται ο χάρτης με  τις τοποθεσίες των IPs στις οποίες
έχει αποστείλει HTTP αιτήσεις. Συγκεκριμένα, στο χάρτη εμφανίζεται ένα heatmap που απεικονίζει
την κατανομή του πλήθους των εγγραφών που αφορούν ιστοαντικείμενα τύπου HTML, PHP, ASP,
JSP</p>
      <br>
      <br>
        <div id="map"></div>     
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



    

<script src="https://cdn.jsdelivr.net/npm/heatmapjs@2.0.2/heatmap.js"></script>
<script src="https://cdn.jsdelivr.net/npm/leaflet-heatmap@1.0.0/leaflet-heatmap.js"></script> 
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/js/bootstrap.min.js"></script>

   
<script>
  async function getValues(values,array)
  {

    for (var i=1; i < array[0].length; i++)
    {
      
      //console.log(array[0][25]);
    
        if(array[0][i] && array[0][i] != 'No_Ip'){
         
          var lnglat = array[0][i].split(',');
          
        values.push({'lat' :lnglat[0] ,'lng':lnglat[1] ,'count' :array[1][i] });}
        else{console.log(' ');}
    }
    //console.log(values);
    return values;
  }

  async function getMarkers(markers,array)
  {

    for (var i=1; i < array[0].length; i++)
    {
      
      //console.log(array[0][25]);
    
        if(array[0][i] && array[0][i] != 'No_Ip'){
         
          var lnglat = array[0][i].split(',');
         
          markers.push([lnglat[0],lnglat[1]]);
         
        }
        else{console.log(' ');}
    }
    //console.log(values);
    return markers;
  }
 

  $.ajax({
        url: "get-IPs.php",
        type: "GET"
        }).done(async function(datas) 
        {
          
          var array = JSON.parse(datas);
          var array2 = array[1];
          
          var values=[];
          var markers=[];
          const val = await getValues(values,array);
          const mar = await getMarkers(markers,array);
          if (val){
          console.log(val);
        }
          if (mar){
            console.log(mar);
          }
          
          var sum=num=0;
          for (var i=1; i < array[0].length; i++)
          {
            if(array[0][i] && array[0][i] != 'No_Ip')
            {
              sum += array[1][i];
              num++;
            }
         }
         console.log(sum/num);

          var testData = {
            
            max:3,//sum/num, //Math.max.apply(Math,array[1])/6,
            data: val
          };

          var baseLayer = L.tileLayer(
           'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',{
              attribution: '...',
              maxZoom: 6,
              minZoom: 1
            }
          );

          var cfg = {
            // radius should be small ONLY if scaleRadius is true (or small radius is intended)
            // if scaleRadius is false it will be the constant radius used in pixels
            "radius": 50,
            "maxOpacity": 10,
            // scales the radius based on map zoom
            "scaleRadius": false,
            // if set to false the heatmap uses the global maximum for colorization
            // if activated: uses the data maximum within the current map boundaries
            //   (there will always be a red spot with useLocalExtremas true)
            "useLocalExtrema": false,
            // which field name in your data represents the latitude - default "lat"
            latField: 'lat',
            // which field name in your data represents the longitude - default "lng"
            lngField: 'lng',
            // which field name in your data represents the data value - default "value"
            valueField: 'count'
          };


          var heatmapLayer = new HeatmapOverlay(cfg);

          var map = new L.Map('map', {
            center: new L.LatLng(38.246639, 21.734573),
            zoom: 3,
            layers: [baseLayer, heatmapLayer]
          });

          heatmapLayer.setData(testData);

          

        /*  for (var i = 0; i < mar.length; i++) {
              
              var marker = new L.marker(mar[i])
              .addTo(map);
              marker.setOpacity(1);
              marker.bindPopup();
              marker.on("click", markerClick);
          }*/
        function markerClick(event) {
            this.getPopup().setLatLng(event.latlng)
            .setContent("Συντεταγμένες Σημείου: " + event.latlng.toString());
          }             


            
        }).fail(function(datas) 
        {
          console.log('fail');
        });
  

</script>

</body>
</html>