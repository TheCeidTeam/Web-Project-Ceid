$(() => {
  $( "#mytable" ).hide();
  var count1=""
  
  $.ajax({
    url    : "../php/user-count.php",
    type   : "GET"
    
    
   
    
}).done(function(data){

    Chart.defaults.global.defaultFontSize = 40;


      var myData=JSON.parse(data);

      
      $('#mytable').append(`<tr><td>${myData[0]}</td></tr>`);
      $( "#mytable" ).show();


    let mychart =document.getElementById('mychart').getContext('2d');
    console.log(myData);
console.log("hi")
    let popChart= new Chart(mychart,{
      type: 'bar',
      data: {
        labels:['Εγγραφές'],
        datasets:[{
          label: 'Εγγραφές Στο σύστημα',
          
          data:[myData[0]],
          backgroundColor: [
            '#ff6361'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)'
                ]
        }]
  
      },
      options: {
        
        title:{
          display: true,
          text: 'Εγγραφές Στο σύστημα',
          fontSize: 30 ,
        },
        legend: {
          display: false
      }
    }
       

  
    });




    
    let mychart1 =document.getElementById('mychart1').getContext('2d');


    let popChart1= new Chart(mychart1,{
      type: 'bar',
      data: {
        labels:['Method POST','Method GET',],
        datasets:[{
          data:[myData[1],myData[2]],
          backgroundColor: [
            '#ff6361',
            '#58508d'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 0.2)'
                ]
        }]
  
      },
      options: {
        title:{
          display: true,
          text: 'Εγγραφές ανά Μέθοδο',
          fontSize: 30 ,
        },
        
        legend: {
          display: false
      }
    }
       

  
    });










    let mychart3 =document.getElementById('mychart3').getContext('2d');


    let popChart3= new Chart(mychart3,{
      type: 'bar',
      data: {
        labels:['domains',],
        datasets:[{
          data:[myData[5]],
          backgroundColor: [
            '#5499C7'
            ],
            borderColor: [
                'rgba(214, 137, 16, 0.2)'
                ]
        }]
  
      },
      options: {
        title:{
          display: true,
          text: 'Πλήθος μοναδικών Domain',
          fontSize: 30 ,
        },
        
        legend: {
          display: false
      }
     
    }
       

  
    });















    
    let mychart2 =document.getElementById('mychart2').getContext('2d');

//console.log(Object.keys(myData[3]).length);
 var arr=[];
 for (var i = 0; i < Object.keys(myData[3]).length; i++) {
  arr.push(`code : ${myData[3][i]}`);
}
var arr1=[];
for (var i = 0; i < Object.keys(myData[4]).length; i++) {
 arr1.push(myData[4][i]);
}

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


var colors = [];
while (colors.length < 100) {
        var color = randomColor();
    colors.push(color);
}
var arr2=[];
for (var i = 0; i < Object.keys(myData[4]).length; i++) {
 arr2.push(colors[i]);
}
console.log(arr2);

console.log(arr);



    let popChart2= new Chart(mychart2,{
      type: 'doughnut',
      data: {
        labels:arr,
        datasets:[{
          data:arr1,
          backgroundColor: arr2,
            borderColor: arr2
        }]
  
      },
      options: {
        
        title:{
          display: true,
          text: 'Εγγραφές ανά Κωδικό',
          fontSize: 30 ,
        },
        
       
    }
       

  
    });
  

    



    

    let mychart4 =document.getElementById('mychart4').getContext('2d');


    let popChart4= new Chart(mychart4,{
      type: 'bar',
      data: {
        labels:['domains',],
        datasets:[{
          data:[myData[6]],
          backgroundColor: [
            '#ff6361'
            ],
            borderColor: [
                'rgba(214, 137, 16, 0.2)'
                ]
        }]
  
      },
      options: {
        title:{
          display: true,
          text: 'Πλήθος μοναδικών Παρόχων',
          fontSize: 30 ,
        },
        
        legend: {
          display: false
      }
     
    }
       

  
    });
    


    let mychart5 =document.getElementById('mychart5').getContext('2d');


    let popChart5= new Chart(mychart5,{
      type: 'bar',
      data: {
        labels:['domains',],
        datasets:[{
          data:[myData[7]],
          backgroundColor: [
            '#B2BABB'
            ],
            borderColor: [
                'rgba(214, 137, 16, 0.2)'
                ]
        }]
  
      },
      options: {
        title:{
          display: true,
          text: 'Πλήθος μοναδικών Παρόχων',
          fontSize: 30 ,
        },
        
        legend: {
          display: false
      }
     
    }
       

  
    });






  });
});