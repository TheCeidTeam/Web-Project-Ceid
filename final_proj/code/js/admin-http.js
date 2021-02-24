$(() => {
   Chart.defaults.global.defaultFontSize = 20;

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
     $('#mychart1').hide()
     let mychart2 =document.getElementById('mychart2').getContext('2d');

     let popChart1= new Chart(mychart2,{
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
     $('#mychart2').hide()





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
                   ).append("   ");;
         
         
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
                   ).append(document.createElement('br'));


            }
         }

         $('.checkbox').change(function() {
            var checked = [];
            $.each($("input[type ='checkbox']:checked"), function(){
                checked.push([$(this).attr("id"),$(this).val()]);
            });
            
            array=checked;
                   });


    $('#submitButton').on('click', function (e) { 
      $('#myfaicon').css('opacity', '1');

        

        e.preventDefault();    
        arrparoxos=[];
        arrcontent=[];
        for(var i=0;i<array.length;i++){
            if(array[i][0]=="contenttype"){
                arrcontent.push(array[i][1]);
            }
            if(array[i][0]=="paroxos"){
               arrparoxos.push(array[i][1]);
               }

            }
          
               
        var user={
             paroxos: arrparoxos,
             contenttype: arrcontent 
            };
            

         $.ajax({
            url    : "../php/cache-control-php.php",
            type   : "POST",
            data   : user

           
            
        }).done(function(data){
            myData=JSON.parse(data);
           // console.log(JSON.parse(data));
            
            

            var numbers=[];
			var datas=data.split(',"');
					
			var maxage=[];
        for(i=0; i<datas.length; i++)
        {      
                var bool=false;
                //console.log(typeof datas[i]);
                if(datas[i].includes('max-age')){
                    bool=true;
                }
                matches = datas[i].match(/\d+/g);
				k=matches[1];
                if(k!=null)
                {  //console.log(parseInt(k));
                    if(bool){
                        maxage.push(parseInt(k))
                    }
                    numbers[i]=parseInt(k);
                    
				}
        }
       // console.log(maxage);
		
            var max=Math.max.apply(Math, maxage);
            var max1=Math.max.apply(Math, maxage);
        var firstbucket=[];
        var secondbucket=[];
        var thirdbucket=[];
        var fourthbucket=[];
        var fifthbucket=[];
        var sixthbucket=[];
        var seventhbucket=[];
        var eightbucket=[];
        var ninebucket=[];
        var tenbucket=[];
        for(i=0;i<numbers.length;i++){
            if(numbers[i]<(max/10)){
                firstbucket.push(numbers[i]);
                continue;
            }
            if(numbers[i]<(2*max/10)){
                secondbucket.push(numbers[i]);
                continue;
            }
            if(numbers[i]<(3*max/10)){
                thirdbucket.push(numbers[i]);
                continue;
            }
            if(numbers[i]<(4*max/10)){
                fourthbucket.push(numbers[i]);
                continue;
            }
            if(numbers[i]<(5*max/10)){
                fifthbucket.push(numbers[i]);
                continue;
            }
            if(numbers[i]<(6*max/10)){
                sixthbucket.push(numbers[i]);
                continue;
            }
            if(numbers[i]<(7*max/10)){
                seventhbucket.push(numbers[i]);
                continue;
            }
            if(numbers[i]<(8*max/10)){
                eightbucket.push(numbers[i]);
                continue;
            }
            if(numbers[i]<(9*max/10)){
                ninebucket.push(numbers[i]);
                continue;
            }
            if(numbers[i]<=(max1)){
                tenbucket.push(numbers[i]);
                continue;
            }
        }

     

        var maxx1=max/10;
        var maxx2=2*max/10;
        var maxx3=3*max/10;
        var maxx4=4*max/10;
        var maxx5=5*max/10;
        var maxx6=6*max/10;
        var maxx7=7*max/10;
        var maxx8=8*max/10;
        var maxx9=9*max/10;

        
         popChart.destroy();
        
         popChart= new Chart(mychart1,{
            "type": "bar",
            "data": {
               "labels": [`${maxx1}`,`${maxx2}`,`${maxx3}`,`${maxx4}`,`${maxx5}`,`${maxx6}`,`${maxx7}`, `${maxx8}`, `${maxx9}`,`${max1}`],
               "datasets": [{
                  "label": "Bar Dataset",
                  "data": [firstbucket.length,secondbucket.length,thirdbucket.length,fourthbucket.length,fifthbucket.length,sixthbucket.length,seventhbucket.length,eightbucket.length,ninebucket.length,tenbucket.length],
                  "borderColor": "rgb(255, 200, 132)",
                  "backgroundColor": "#451e3e"
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
         $('#myfaicon').css('opacity', '0');

         $('#mychart1').show();
         $('html,body').animate({
            scrollTop: $("#mychart1").offset().top},
            'slow');

        













        });
       });


    $('#submitButton1').on('click', function (e) { 

      $('#myfaicon').css('opacity', '1');






       
       e.preventDefault();    
       arrparoxos=[];
       arrcontent=[];
       for(var i=0;i<array.length;i++){
           if(array[i][0]=="contenttype"){
               arrcontent.push(array[i][1]);
           }
           if(array[i][0]=="paroxos"){
            
              arrparoxos.push(array[i][1]);
              }

           }
         
              
       var user={
            paroxos: arrparoxos,
            contenttype: arrcontent 
           };
           

        $.ajax({
           url    : "../php/cacheability.php",
           type   : "POST",
           data   : user

          
           
            }).done(function(data){

                myData1=JSON.parse(data);


            
         popChart1.destroy();
        
         popChart1= new Chart(mychart2,{
            "type": "bar",
            "data": {
               "labels": [`public`,`private`,`no-cache`,`no-store`],
               "datasets": [{
                  "label": "Bar Dataset",
                  "data": [myData1[0],myData1[1],myData1[2],myData1[3]],
                  "borderColor": "rgb(255, 200, 132)",
                  "backgroundColor": "#451e3e"
               }]
            },
            "options": {
               "scales": {
                  "yAxes": [{
                     "ticks": {
                        "beginAtZero": true
                     }
                     
                  }],
                  xAxes: [{
                     barPercentage: 0.4
                 }]
             
               }
                        }
        
        
        
         });
         $('#myfaicon').css('opacity', '0');

         $('#mychart2').show();
         $('html,body').animate({
            scrollTop: $("#mychart2").offset().top},
            'slow');


            });
        });


        $('#submitButton2').on('click', function (e) { 

         $('#myfaicon').css('opacity', '1');

       arrparoxos=[];
       arrcontent=[];
       for(var i=0;i<array.length;i++){
           if(array[i][0]=="contenttype"){
               arrcontent.push(array[i][1]);
           }
           if(array[i][0]=="paroxos"){
              arrparoxos.push(array[i][1]);
              }

           }
         
              
       var user={
            paroxos: arrparoxos,
            contenttype: arrcontent 
           };


         $.ajax({
            url    : "../php/cache-stale.php",
            type   : "POST",
            data   : user
 
           
            
             }).done(function(data){
               
               $( "#myhtml" ).hide();
               $( "#myhtml" ).empty();
               myData2=JSON.parse(data);

               var maxper=myData2[0]*100/myData2[2]
               var minper=myData2[1]*100/myData2[2]

             

        
               $('#myfaicon').css('opacity', '0');

         $( '#myhtml' ).append(`<h4>Max-Stale Percentage : ${maxper}%</h4>` ).append(`<h4>Min-Fresh Percentage : ${minper}% </h4>`);
         $( "#myhtml" ).show();

         $('html,body').animate({
            scrollTop: $("#myhtml").offset().top},
            'slow');
      
         });
      
      });





    });
});