$(() => {

  $( "#mytable" ).hide();
  $('#canvas').hide();
  $('#canvas1').hide();
  $('#canvas2').hide();
  $('#canvas3').hide();
  $('#canvas4').hide();
  $('#canvas5').hide();
  $('#fas').hide();
    $('#fas1').hide();
    $('#fas2').hide();
    $('#fas3').hide();
    $('#fas4').hide();
    $('#fas5').hide();
    $('#icon').hide();
    $('#icon1').hide();
    $('#icon2').hide();
    $('#icon3').hide();
    $('#icon4').hide();
    $('#icon5').hide();
  

let string=""

  let mychart =document.getElementById('mychart').getContext('2d');
    
     let popChart= new Chart(mychart,{
      "type": "bar",
      "data": {
         "labels": [],
         "datasets": [{
            "label": "Bar Dataset",
            "data": [],
            "borderColor": "rgb(255, 200, 132)",
            "backgroundColor": "rgba(255, 200, 132)"
         }]
      },
      "options": {
         "scales": {
            "yAxes": [{
               "ticks": {
                  "beginAtZero": true
               }
               
            }]
         }
                  }
  
   });

   




  let mychart1 =document.getElementById('mychart1').getContext('2d');
    let popChart1= new Chart(mychart1,{
        "type": "bar",
        "data": {
           "labels": [],
           "datasets": [{
              "label": "Bar Dataset",
              "data": [],
              "borderColor": "rgb(255, 200, 132)",
              "backgroundColor": "rgba(255, 200, 132)"
           }]
        },
        "options": {
           "scales": {
              "yAxes": [{
                 "ticks": {
                    "beginAtZero": true
                 }
                 
              }]
           }
                    }
    
     });

     let mychart2 =document.getElementById('mychart2').getContext('2d');

     let popChart2= new Chart(mychart2,{
      "type": "bar",
      "data": {
         "labels": [],
         "datasets": [{
            "label": "Bar Dataset",
            "data": [],
            "borderColor": "rgb(255, 200, 132)",
            "backgroundColor": "rgba(255, 200, 132)"
         }]
      },
      "options": {
         "scales": {
            "yAxes": [{
               "ticks": {
                  "beginAtZero": true
               }
               
            }]
         },
        
          pointLabels: { fontSize:18 }
                  }
    
    });
      


   

   let mychart3 =document.getElementById('mychart3').getContext('2d');


   let popChart3= new Chart(mychart3,{
    "type": "bar",
    "data": {
       "labels": [],
       "datasets": [{
          "label": "Bar Dataset",
          "data": [],
          "borderColor": "rgb(255, 200, 132)",
          "backgroundColor": "rgba(255, 200, 132)"
       }]
    },
    "options": {
       "scales": {
          "yAxes": [{
             "ticks": {
                "beginAtZero": true
             }
             
          }]
       }
                }

 });


 let mychart4 =document.getElementById('mychart4').getContext('2d');


 let popChart4= new Chart(mychart4,{
      "type": "bar",
      "data": {
         "labels": [],
         "datasets": [{
            "label": "Bar Dataset",
            "data": [],
            "borderColor": "rgb(255, 200, 132)",
            "backgroundColor": "rgba(255, 200, 132)"
         }]
      },
      "options": {
         "scales": {
            "yAxes": [{
               "ticks": {
                  "beginAtZero": true
               }
               
            }]
         }
                  }
  
   });
 



   let mychart5 =document.getElementById('mychart5').getContext('2d');


   let popChart5= new Chart(mychart5,{
     "type": "bar",
     "data": {
        "labels": [],
        "datasets": [{
           "label": "Bar Dataset",
           "data": [],
           "borderColor": "rgb(255, 200, 132)",
           "backgroundColor": "rgba(255, 200, 132)"
        }]
     },
     "options": {
        "scales": {
           "yAxes": [{
              "ticks": {
                 "beginAtZero": true
              }
              
           }]
        }
                 }
 
  });



    Chart.defaults.global.defaultFontSize = 25;


 
  






    


    

























    

//console.log(Object.keys(myData[3]).length);

/*
const randomColor = (() => {
  "use strict";

  const randomInt = (min, max) => {
    return Math.floor(Math.random() * (max - min + 1)) + min;
  };

  return () => {
    var h = randomInt(0, 360);
    var s = randomInt(42, 98);
    var l = randomInt(40, 90);
    return `hsl(${h},${s}%,${l}%)`;
  };
})();

*/
var colors = [];
colors =  ["#5426e0",  "#802234","#e33e52", "#b2be57", "#fa06ec",
  "#63b598", "#ce7d78", "#ea9e70", "#a48a9e", "#c6e1e8", "#648177" ,"#0d5ac1" ,
  "#f205e6" ,"#1c0365" ,"#14a9ad" ,"#4ca2f9" ,"#a4e43f" ,"#d298e2" ,"#6119d0",
  "#d2737d" ,"#c0a43c" ,"#f2510e" ,"#651be6" ,"#79806e" ,"#61da5e" ,"#cd2f00" ,
 "#b11573" ,"#4bb473" ,"#75d89e" ,
  "#2f3f94" ,"#2f7b99" ,"#da967d" ,"#34891f" ,"#b0d87b" ,"#ca4751" ,"#7e50a8" ,
  "#c4d647" ,"#e0eeb8" ,"#11dec1" ,"#289812" ,"#566ca0" ,"#ffdbe1" ,"#2f1179" ,
  "#935b6d" ,"#916988" ,"#513d98" ,"#aead3a", "#9e6d71", "#4b5bdc", "#0cd36d",
  "#250662", "#cb5bea", "#228916", "#ac3e1b", "#df514a", "#539397", "#880977",
  "#f697c1", "#ba96ce", "#679c9d", "#c6c42c", "#5d2c52", "#48b41b", "#e1cf3b",
  "#5be4f0", "#57c4d8", "#a4d17a", "#225b8", "#be608b", "#96b00c", "#088baf",
  "#f158bf", "#e145ba", "#ee91e3", "#05d371", 
  "#6749e8", "#0971f0", "#8fb413", "#b2b4f0", "#c3c89d", "#c9a941", "#41d158",
  "#fb21a3", "#51aed9", "#5bb32d", "#807fb", "#21538e", "#89d534", "#d36647",
  "#7fb411", "#0023b8", "#3b8c2a", "#986b53", "#f50422", "#983f7a", "#ea24a3",
  "#79352c", "#521250", "#c79ed2", "#d6dd92", 
  "#1bb699", "#6b2e5f", "#64820f", "#1c271", "#21538e", "#89d534", "#d36647",
  "#7fb411", "#0023b8", "#3b8c2a", "#986b53", "#f50422", "#983f7a", "#ea24a3",
  "#79352c", "#521250", "#c79ed2", "#d6dd92", "#e33e52", "#b2be57", "#fa06ec",
  "#1bb699", "#6b2e5f", "#64820f", "#1c271", "#9cb64a", "#996c48", "#9ab9b7",
  "#06e052", "#e3a481", "#0eb621", "#fc458e", "#b2db15", "#aa226d", "#792ed8",
  "#73872a", "#520d3a", "#cefcb8", "#a5b3d9", "#7d1d85", "#c4fd57", "#f1ae16",
  "#8fe22a", "#ef6e3c", "#243eeb", "#1dc18", "#dd93fd", "#3f8473", "#e7dbce",
  "#421f79", "#7a3d93", "#635f6d", "#93f2d7", "#9b5c2a", "#15b9ee", "#0f5997",
  "#409188", "#911e20", "#1350ce", "#10e5b1", "#fff4d7", "#cb2582", "#ce00be",
  "#32d5d6", "#17232", "#608572", "#c79bc2", "#00f87c", "#77772a", "#6995ba",
  "#fc6b57", "#f07815", "#8fd883", "#060e27", "#96e591", "#21d52e", "#d00043",
  "#b47162", "#1ec227", "#4f0f6f", "#1d1d58", "#947002", "#bde052", "#e08c56",
  "#28fcfd", "#bb09b", "#36486a", "#d02e29", "#1ae6db", "#3e464c", "#a84a8f",
  "#911e7e", "#3f16d9", "#0f525f", "#ac7c0a", "#b4c086", "#c9d730", "#30cc49",
  "#3d6751", "#fb4c03", "#640fc1", "#62c03e", "#d3493a", "#88aa0b", "#406df9",
  "#615af0", "#4be47", "#2a3434", "#4a543f", "#79bca0", "#a8b8d4", "#00efd4",
  "#7ad236", "#7260d8", "#1deaa7", "#06f43a", "#823c59", "#e3d94c", "#dc1c06",
  "#f53b2a", "#b46238", "#2dfff6", "#a82b89", "#1a8011", "#436a9f", "#1a806a",
  "#4cf09d", "#c188a2", "#67eb4b", "#b308d3", "#fc7e41", "#af3101", "#ff065",
  "#71b1f4", "#a2f8a5", "#e23dd0", "#d3486d", "#00f7f9", "#474893", "#3cec35",
  "#1c65cb", "#5d1d0c", "#2d7d2a", "#ff3420", "#5cdd87", "#a259a4", "#e4ac44",
  "#1bede6", "#8798a4", "#d7790f", "#b2c24f", "#de73c2", "#d70a9c", "#25b67",
  "#88e9b8", "#c2b0e2", "#86e98f", "#ae90e2", "#1a806b", "#436a9e", "#0ec0ff",
  "#f812b3", "#b17fc9", "#8d6c2f", "#d3277a", "#2ca1ae", "#9685eb", "#8a96c6",
  "#dba2e6", "#76fc1b", "#608fa4", "#20f6ba", "#07d7f6", "#dce77a", "#77ecca"]
//while (colors.length < 100) {
  //      var color = randomColor();
   // colors.push(color);
//}



  

    



    






  
  
    $('#submitButton').on('click', function (e) {

      $('#mychart').hide();
      $('#mychart1').hide();
      $('#mychart2').hide();
      $('#mychart3').hide();
      $('#mychart4').hide();
      $('#mychart5').hide();
      /*$('#pmychart').hide();
      $('#pmychart1').hide();
      $('#pmychart2').hide();
      $('#pmychart3').hide();
      $('#pmychart4').hide();
      $('#pmychart5').hide();*/
      $('#fas').hide();
      $('#fas1').hide();
      $('#fas2').hide();
      $('#fas3').hide();
      $('#fas4').hide();
      $('#fas5').hide();
      $('#icon').hide();
      $('#icon1').hide();
      $('#icon2').hide();
      $('#icon3').hide();
      $('#icon4').hide();
      $('#icon5').hide();

   
      string=$( "#myselect" ).val();
      if(string=="Εγγεγραμμένοι χρήστες"){
        $('#myfaicon').css('opacity', '1');


        $.ajax({
          url    : "../php/registerd-users.php",
          type   : "GET"
          
          
         
          
      }).done(function(data1){

        var userData=JSON.parse(data1);
        popChart= new Chart(mychart,{
          type: 'bar',
          data: {
            labels:['Εγγραφές'],
            datasets:[{
              label: 'Εγγραφές Στο σύστημα',
              
              data:[userData[0]],
              backgroundColor: [
                '#ff6361'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)'
                    ]
            }]
      
          },
          options: {
            scales: {
              xAxes: [{
                  barPercentage: 0.1
              }]
          },
            title:{
              display: true,
              text: 'Εγγραφές Στο σύστημα',
              fontSize: 40 ,
            },
            legend: {
              display: false
          }
        }
           
    
      
        });
      

        
        
        
        
        
        
      //$('#pmychart').show();
      $('#myfaicon').css('opacity', '0');

      $('#mychart').show();
      $('#icon').show();
      $('#fas').show();
      $('html,body').animate({
        scrollTop: $("#mychart").offset().top},
        'slow');




      });//ajax call

        //registered users
      }

      if(string=="Eγγραφές ανά μέθοδο"){
        $('#myfaicon').css('opacity', '1');

        //$('#pmychart1').show();


        $.ajax({
          url    : "../php/users-permethod.php",
          type   : "GET"
          
          
         
          
      }).done(function(data2){

        let methodData=JSON.parse(data2);
        //console.log(methodData[0][0])

        var method_arr=[];
        for (let i = 0; i < Object.keys(methodData[0]).length; i++) {
          method_arr.push(`${methodData[0][i]}`);
       }
       var method_count=[];
       for (let i = 0; i < Object.keys(methodData[1]).length; i++) {
        method_count.push(methodData[1][i]);
       }

       var colors_method=[]; 
       for (let i = 0; i < Object.keys(methodData[1]).length; i++) {
        colors_method.push(colors[i]);
}



       popChart1= new Chart(mychart1,{
        type: 'bar',
        data: {
          labels:method_arr,
          datasets:[{
            data:method_count,
            backgroundColor: colors_method
              ,
              borderColor: colors_method
          }]
    
        },
        options: {
          scales: {
            xAxes: [{
                barPercentage: 0.35
            }]
        },
          title:{
            display: true,
            text: 'Εγγραφές ανά Μέθοδο',
            fontSize: 40 ,
          },
          
          legend: {
            display: false
        }
      }
         
  
    
      });
  




      $('#mychart1').show();
      $('#myfaicon').css('opacity', '0');

      $('#icon1').show();
      $('#fas1').show();
      $('html,body').animate({
        scrollTop: $("#mychart1").offset().top},
        'slow');


      });//ajax call
        // users per method

      }
      if(string=="Εγγραφές ανά status"){
        $('#myfaicon').css('opacity', '1');

        $.ajax({
          url    : "../php/users-perstatus.php",
          type   : "GET"
          
          
         
          
      }).done(function(data3){

        
        let statusData=JSON.parse(data3);

        var status_arr=[];
        for (var i = 0; i < Object.keys(statusData[0]).length; i++) {
          status_arr.push(`code : ${statusData[0][i]}`);
      }
      var values_arr=[];
      for (var i = 0; i < Object.keys(statusData[1]).length; i++) {
        values_arr.push(statusData[1][i]);
          }
          var colors_status=[];
for (var i = 0; i < Object.keys(statusData[1]).length; i++) {
  colors_status.push(colors[i]);
}






popChart2= new Chart(mychart2,{
  type: 'doughnut',
  data: {
    labels:status_arr,
    datasets:[{
      data:values_arr,
      backgroundColor: colors_status,
        borderColor: colors_status
    }]

  },
  options: {
    maintainAspectRatio: false, 
    title:{
      display: true,
      text: 'Εγγραφές ανά Κωδικό',
      fontSize: 30 ,
    
    },
    
   
}
   


});


       // $('#pmychart2').show();
       $('#myfaicon').css('opacity', '0');

      $('#mychart2').show();
      $('#icon2').show();

      $('#fas2').show();


      $('html,body').animate({
        scrollTop: $("#mychart2").offset().top},
        'slow');


        


      });//ajax call
                // users per status

      }
      if(string=="Μοναδικά domain"){
        $('#myfaicon').css('opacity', '1');
        
        $.ajax({
          url    : "../php/unique-domains.php",
          type   : "GET"
          
          
         
          
      }).done(function(data4){

        let domains=JSON.parse(data4);




        popChart3= new Chart(mychart3,{
          type: 'bar',
          data: {
            labels:['domains',],
            datasets:[{
              data:[domains[0]],
              backgroundColor: [
                '#5499C7'
                ],
                borderColor: [
                    'rgba(214, 137, 16, 0.2)'
                    ]
            }]
      
          },
          options: {
            scales: {
              xAxes: [{
                  barPercentage: 0.1
              }]
          },
            title:{
              display: true,
              text: 'Πλήθος μοναδικών Domain',
              fontSize: 40 ,
            },
            
            legend: {
              display: false
          }
         
        }
           
    
      
        });



        //$('#pmychart3').show();
        $('#myfaicon').css('opacity', '0');

      $('#mychart3').show();
      $('#icon3').show();

      $('#fas3').show();


      $('html,body').animate({
        scrollTop: $("#mychart3").offset().top},
        'slow');


      });//ajax call
// uniqeu domains
      }
      if(string=="Μοναδικοί πάροχοι"){
        $('#myfaicon').css('opacity', '1');

        $.ajax({
          url    : "../php/unique-paroxoi.php",
          type   : "GET"
          
          
         
          
      }).done(function(data5){

        let paroxoi=JSON.parse(data5);

       // $('#pmychart4').show();
       
     popChart4= new Chart(mychart4,{
      type: 'bar',
      data: {
        labels:['Πάροχοι',],
        datasets:[{
          data:[paroxoi[0]],
          backgroundColor: [
            '#ff6361'
            ],
            borderColor: [
                'rgba(214, 137, 16, 0.2)'
                ]
        }]
  
      },
      options: {
        scales: {
          xAxes: [{
              barPercentage: 0.15
          }]
      },
        title:{
          display: true,
          text: 'Πλήθος μοναδικών Παρόχων',
          fontSize: 40 ,
        },
        
        legend: {
          display: false
      }
     
    }
       

  
    });
    
    $('#myfaicon').css('opacity', '0');

      $('#mychart4').show();
      $('#fas4').show();
      $('#icon4').show();



      $('html,body').animate({
        scrollTop: $("#mychart4").offset().top},
        'slow');

      });
        
//paroxoi
      }
      if(string=="Ιστοαντικείμενα"){
        $('#myfaicon').css('opacity', '1');

        $.ajax({
          url    : "../php/webobj.php",
          type   : "GET"
          
          
         
          
      }).done(function(data6){
        let webobj=JSON.parse(data6);

        var contentarr=[];
        for (let i = 0; i < Object.keys(webobj[0]).length; i++) {
          contentarr.push(`${webobj[0][i]}`);
       }
       var agearr=[];
       for (let i = 0; i < Object.keys(webobj[1]).length; i++) {
        agearr.push(webobj[1][i]);
       }

       var colors_age=[]; 
       for (let i = 0; i < Object.keys(webobj[1]).length; i++) {
        colors_age.push(colors[i]);
}


        


     popChart5= new Chart(mychart5,{
      type: 'bar',
      data: {
        labels:contentarr,
        datasets:[{
          data:agearr,
          backgroundColor: colors_age,
            borderColor: colors_age
        }]
  
      },
      options: {
       
        title:{
          display: true,
          text: 'Μέση ηλικία ιστοαντικειμένων',
          fontSize: 40 ,
        },
        
        legend: {
          display: false
      }
     
    }
       

  
    });
  

        //$('#pmychart5').show();
        $('#myfaicon').css('opacity', '0');

      $('#mychart5').show();
    
      $('#fas5').show();
      $('#icon5').show();


      $('html,body').animate({
        scrollTop: $("#mychart5").offset().top},
        'slow');


      });
// Weg obj Age per type
      }


    });


  });
