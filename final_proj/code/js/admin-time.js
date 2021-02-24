$(() => {
   $('#mychart1').hide();

   let mychart1 =document.getElementById('mychart1').getContext('2d');
   
  
    let popChart= new Chart(mychart1,{
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
  
var array=[]

    $.ajax({
      url    : "../php/checkbox-php.php",
      type   : "GET"      
     
      
  }).done(function(data) {
     var ckeckboxData=JSON.parse(data);



for (var key in ckeckboxData[0]) {
   if (ckeckboxData[0].hasOwnProperty(key)) {
      $('#checks').append(
         $(document.createElement('input')).prop({
           id: `contenttype`,
           name: `${ckeckboxData[0][key]}`,
           value: `${ckeckboxData[0][key]}`,
           type: 'checkbox',
           class: 'checkbox-inline'
         })
         ).append(
            $(document.createElement('label')).prop({
              for: `${ckeckboxData[0][key]}`
            }).html(`${ckeckboxData[0][key]}`)
          ).append("   ");


     

   }
}
   

      
          for (var key in ckeckboxData[2]) {
            if (ckeckboxData[2].hasOwnProperty(key)) {
               $('#checkmethod').append(
                  $(document.createElement('input')).prop({
                    id: `method`,
                    name: `${ckeckboxData[2][key]}`,
                    value: `${ckeckboxData[2][key]}`,
                    type: 'checkbox',
                    class: 'checkbox-inline'
                  })
                  ).append(
                     $(document.createElement('label')).prop({
                       for: `${ckeckboxData[2][key]}`
                     }).html(`${ckeckboxData[2][key]}`)
                   ).append("   ");


              


            }
         }

         for (var key in ckeckboxData[1]) {
            if (ckeckboxData[1].hasOwnProperty(key)) {
               $('#checkparoxo').append(
                  $(document.createElement('input')).prop({
                    id: `paroxos`,
                    name: `${ckeckboxData[1][key]}`,
                    value: `${ckeckboxData[1][key]}`,
                    type: 'checkbox',
                    class: 'checkbox-inline'
                  })
                  ).append(
                     $(document.createElement('label')).prop({
                       for: `${ckeckboxData[1][key]}`
                     }).html(`${ckeckboxData[1][key]}`)
                   ).append("   ");



                  }
         }

         
 $('.checkbox-inline').change(function() {
   var checked = [];
   $.each($("input[type ='checkbox']:checked"), function(){
       checked.push([$(this).attr("id"),$(this).val()]);
   });
   array=checked;
//console.log(checked);
          });
   

$('#submitButton').on('click', function (e) {
   $('#myfaicon').css('opacity', '1');

   $('#mychart1').hide();
   popChart.destroy();

  arrparoxos=[];
  arrmethod=[];
  arrcontent=[];
  arrday=[];
  for(var i=0;i<array.length;i++){
   if(array[i][0]=="method"){

      arrmethod.push(array[i][1]);
   }
   if(array[i][0]=="paroxos"){
      arrparoxos.push(array[i][1]);
      }
      if(array[i][0]=="day"){
         if(array[i][1]=="Sunday"){
            arrday.push(1);
         }
         if(array[i][1]=="Monday"){
            arrday.push(2);
         }
         if(array[i][1]=="Tuesday"){
            arrday.push(3);
         }
         if(array[i][1]=="Wednesday"){
            arrday.push(4);
         }
         if(array[i][1]=="Thursday"){
            arrday.push(5);
         }
         if(array[i][1]=="Friday"){
            arrday.push(6);
         }
         if(array[i][1]=="Saturday"){
            arrday.push(7);
         }
        
         }
         if(array[i][0]=="contenttype"){

            arrcontent.push(array[i][1]);
            }
  }

  

var user={
   paroxos: arrparoxos,
   day: arrday,
   contenttype: arrcontent,
   method: arrmethod

};

  $.ajax({
    url    : "../php/admin-timeconnectv2.php",
    type   : "POST",
    data   : user
    
    
   
    
}).done(function(data){

   Chart.defaults.global.defaultFontSize = 18;
   myData=JSON.parse(data);


   popChart= new Chart(mychart1,{
    "type": "bar",
    "data": {
       "labels": ["00:00","01:00","02:00","03:00","04:00","05:00","06:00","07:00", "08:00", "09:00", "10:00", "11:00", "12:00", "13:00", "14:00", "15:00", "16:00", "17:00", "18:00", "19:00", "20:00","21:00","22:00","23:00"],
       "datasets": [{
          "label": "Bar Dataset",
          "data": [myData[0],myData[1],myData[2],myData[3],myData[4],myData[5],myData[6],myData[7],myData[8],myData[9],myData[10],myData[11],myData[12],myData[13],myData[14],myData[15],myData[16],myData[17],myData[18],myData[19],myData[20],myData[21],myData[22],myData[23]],
          "borderColor": "rgb(255, 99, 132)",
          "backgroundColor": "#451e3e"
       }]
    },
    "options": {
       "scales": {
          "xAxes": [{
             type: 'time',
             time: {
                parser: "HH:mm", //<- use 'parser'
                unit: 'hour',
                displayFormats: {
                   'hour': 'H',
                }
             }
          }],
          "yAxes": [{
             "ticks": {
                "beginAtZero": true
             }
          }]
       }
    }



 });


   
 //$('#pmychart').show();
 $('#myfaicon').css('opacity', '0');


 $('#mychart1').show();


 $('html,body').animate({
   scrollTop: $("#mychart1").offset().top},
   'slow');



});
});




});
});

