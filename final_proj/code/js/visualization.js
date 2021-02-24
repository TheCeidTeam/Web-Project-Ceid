$(() => {


      
      var colors = ["#A52A2A","#8A2BE2","#DEB887","#5F9EA0","#D2691E","#DC143C","#FF8C00","#006400","#BDB76B","#008B8B","#8FBC8F","#FF69B4","#CD5C5C","#FFA07A","#778899","#800000","#9370DB","#191970","#FF4500","#CD853F","#FF0000","#FA8072","#A0522D","#708090","#6A5ACD","#008080","#00FFFF","#BC8F8F","#9ACD32"];
     

    $.ajax({
        url    : "../php/geoloc-php.php",
        type   : "GET"      
       
        
    }).done(function(data) {
     
        myData=JSON.parse(data);





var string ='';

var componets=''
var componts=[];
var count = Object.keys(myData).length;





    options = {
        icon: 'leaf',
        iconShape: 'marker'
    };
    const mymap = L.map('mapid').setView([30, 10.], 2);
   
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'pk.eyJ1IjoiZ2VvZGltY2VpZCIsImEiOiJja2l3NWYyNmYwcXFlMnhtd2RmenFqMGZhIn0.x29KH_J6kf_fMdLW3-wLaA'
    }).addTo(mymap);
L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributor',  
   
    //other attributes.
}).addTo(mymap);

var geoloc=myData[0][2];
geocomp=geoloc.split('/');


var weight=1;
var arr=[]
var arrcolor=[]
var usercolor=[];
var x =""
var w=0;








for(var i=0;i<count;i++){
    if(!(arr.includes(myData[i][3]))){

        arr.push(myData[i][3]);
        arrcolor.push(colors[w%colors.length]);
        usercolor.push(colors[colors.length-w])
        w++;
        geoloc=myData[i][2];
       
    geocomp=geoloc.split('/');
    options = {
        iconShape: 'circle-dot',
        iconSize: [10,10],
        borderColor: usercolor[usercolor.length-1],
        borderWidth	: 4
    };
    L.marker([geocomp[0], geocomp[1]], {
        icon: L.BeautifyIcon.icon(options),
    }).addTo(mymap);
    }
}



var j=0;
var color="red";
for(var i=0;i<count;i++){
    string=myData[i][0];
    componets=string.split(',');
   

    geoloc=myData[i][2];
    geocomp=geoloc.split('/');
    for(j=0;j<arr.length;j++){
        if(myData[i][3]==arr[j]){
            color=arrcolor[j];
        }
    }

    if(parseInt(myData[i][1])>100){
    weight=3;

    }else if(parseInt(myData[i][1])>10){
        weight=2;

    }
    else{
        weight=1;
    }


    options = {
        iconShape: 'circle-dot',
        iconSize: [10,10],
        borderColor: color,
        borderWidth	: 4
    };
    L.marker([componets[0], componets[1]], {
        icon: L.BeautifyIcon.icon(options),
    }).addTo(mymap);




    
    L.polyline(  [[componets[0], componets[1]],
        [geocomp[0],geocomp[1]]], {weight: `${weight}`,color: `${color}`}).addTo(mymap);
    
    
    componts.push(componets);





}






    });

});