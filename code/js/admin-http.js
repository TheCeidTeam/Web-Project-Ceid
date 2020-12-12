$(() => {


    var array=[]
    $.ajax({
        url    : "../php/checkbox-php.php",
        type   : "GET"      
       
        
    }).done(function(data) {

        var ckeckboxData=JSON.parse(data);
        console.log(ckeckboxData);

        for (var key in ckeckboxData[0]) {
            if (ckeckboxData[0].hasOwnProperty(key)) {
               $('#checks').append(
                  $(document.createElement('input')).prop({
                    id: `contenttype`,
                    name: `${ckeckboxData[0][key]}`,
                    value: `${ckeckboxData[0][key]}`,
                    type: 'checkbox',
                    class: 'checkbox'
                  })
                  ).append(
                     $(document.createElement('label')).prop({
                       for: `${ckeckboxData[0][key]}`
                     }).html(`${ckeckboxData[0][key]}`)
                   ).append(document.createElement('br'));
         
         
               console.log(ckeckboxData[0][key]);
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
                    class: 'checkbox'
                  })
                  ).append(
                     $(document.createElement('label')).prop({
                       for: `${ckeckboxData[1][key]}`
                     }).html(`${ckeckboxData[1][key]}`)
                   ).append(document.createElement('br'));


               console.log(ckeckboxData[1][key]);
            }
         }

         $('.checkbox').change(function() {
            var checked = [];
            $.each($("input[type ='checkbox']:checked"), function(){
                checked.push([$(this).attr("id"),$(this).val()]);
            });
            
            array=checked;
         console.log(checked);
                   });


    $('#submitButton').on('click', function (e) {       
        arrparoxos=[];
        arrcontent=[];
        for(var i=0;i<array.length;i++){
            if(array[i][0]=="contenttype"){
                console.log(array[i][0]);
                arrcontent.push(array[i][1]);
            }
            if(array[i][0]=="paroxos"){
               console.log(array[i][0]);
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

           
            
        }).done(function(data) {

            console.log(JSON.parse(data));







        });
    });
    });
});