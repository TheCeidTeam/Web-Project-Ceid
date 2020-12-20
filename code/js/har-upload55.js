$(() => {
	  
    $('#btnLoad').on('click', function (e) {


        
        
            var flag=0;
            var IpDb = {};
            var Ips=[];
            var geo_loc;
            var city;
            var Paroxos;
            
            var input, file, fr;
            var i=0;
            const res3=start();
        
            if (typeof window.FileReader !== 'function') 
                {
                  alert("The file API isn't supported on this browser yet.");
                  return;
                }
        
            input = document.getElementById('fileinput');
        
            if (!input) 
                {
                  alert("Um, couldn't find the fileinput element.");
                }
        
            else if (!input.files)
               {
                alert("This browser doesn't seem to support the `files` property of file inputs.");
               }
        
            else if (!input.files[0])
                {
                  alert("Please select a file before clicking 'Load'");
                }
        
               else   {
                        file = input.files[0];
                        fr = new FileReader();
        
                         
                          fr.onload = receivedText;
                           fr.readAsText(file);
                      }
              console.log("DONE");
         
         
            
            
            async function receivedText(e) 
          {
        
                let lines = e.target.result;
                var newArr = JSON.parse(lines); 
                var entries = newArr.log.entries;
              
                var pinakas=[];
        
              
                var i = 0;
                var dataid=0;
                const temp=await start();
                const values=await geo_locs(entries,Ips,IpDb);
                IpDb=values["IpDb"];
                Ips=values["Ips"];
                
                //console.log("\n\nI GOT");
                //console.log(values);
                //console.log(temp);
                
                city=temp['city'];
                Paroxos=temp['Paroxos'];
                geo_loc=temp['geo_loc'];
                
                //entries.forEach(inentries);
                
            console.log("\n\n\n\n\n\n I GOT ALL THE IP'S LOCATIONS, CONTINUE WITH IPDS=");
            console.log(IpDb);
        
            for (obj of entries)
                {
                    inentries(obj,Paroxos,city,geo_loc,IpDb); //call INETRIES
                }
        
        
           function inentries(obj,Paroxos,City,geo_loc,IpDb)
            {
                console.log("starting this user");
                //console.log(IpDb);
        
              
                var object1 = {};
              
              
              object1["StartedDateTime"] = obj.startedDateTime;
              object1["Wait"] = obj.timings.wait;
              object1["Status"] = obj.response.status;
              object1["StatusText"] = obj.response.statusText;
              
              ip=obj.serverIPAddress.replace('[','');
              ip=ip.replace(']','');
              
              object1["IpAddress"]=ip;
              
              
              object1["Geo_loc"] = geo_loc;
              
              
              object1["City"] = city;
              object1["paroxos"] = Paroxos;
              object1["server_geo_loc"]=IpDb[ip];
              
              
               
        
        
                          if(obj.request.method)
                          {
                                object1["Method"] = obj.request.method;
                          }
                           else{
                             object1["Method"] = "Empty";
                           }
              
        
                        if(obj.request.url)
                          {
        
                              let temp1=new URL(obj.request.url);
                              temp1=domain_from_url(temp1);
                              object1["Request url"] = temp1;
         
                          }
                          else{
                             object1["Request url"] = "Empty";
                           }
        
        
        
                   head=obj.response.headers;
                   if(head.some(object=>object.name==="content-type"))
                           {
        
                              let obj = head.find(obj => obj.name == 'content-type');
                              object1["Content Type"] = obj.value;
        
                           }
                          else{
                             object1["Content Type"] = "Empty";
                           }
        
        
                   if(head.some(object=>object.name==="cache-control"))
                       {
        
                          let obj = head.find(obj => obj.name == 'cache-control');
                          object1["Cache-control"] = obj.value;
         
                       }
                        else{
                         object1["Cache-control"] = "Empty";
                       }
        
        
                   if(head.some(object=>object.name==="pragma"))
                       {
        
                          let obj = head.find(obj => obj.name == 'pragma');
                          object1["Pragma"] = obj.value;
                       }
                        else{
                         object1["Pragma"] = "Empty";
                       }
        
        
                   if(head.some(object=>object.name==="expires"))
                       {
        
                          let obj = head.find(obj => obj.name == 'expires');
        
                          object1["Expires"] = obj.value;
        
                       }
                         else{
                         object1["Expires"] = "Empty";
                       }
        
        
                   if(head.some(object=>object.name==="age"))
                       {
        
                          let obj = head.find(obj => obj.name == 'age');
        
                          object1["Age"] = obj.value;
                       }
                        else{
                         object1["Age"] = "Empty";
                       }
        
        
                   if(head.some(object=>object.name==="last-modified"))
                       {
        
                            let obj = head.find(obj => obj.name == "last-modified");
                            object1["Last-modified"] = obj.value;
                       }
                       else{
                         object1["Last-modified"] = "Empty";
                       }
                   if(head.some(object=>object.name==="host"))
                       {
                              let obj = head.find(obj => obj.name == 'host');
        
                              object1["Host"] = obj.value;
                       }
                       else{
                         object1["Host"] = "Empty";
                       }
        
              
                i++; 	//INCREASE THE i COUNTER
                dataid++;
        
        //Editing fields 
        
        object1["StartedDateTime"]=object1["StartedDateTime"].replace(/([a-zA-Z])/g, ' ');
        object1["StartedDateTime"] = object1["StartedDateTime"].replace(/^\s+|\s+$/g, "");
        object1["Content Type"]=object1["Content Type"].split('/')[0];
        
        datadate=object1["StartedDateTime"].split(' ')[0];
                 
                 
        var user = {
                    email: "geodimyolo@gmail.com",
                    startedDateTime:  object1["StartedDateTime"],
                    
                    wait: object1["Wait"],
                    IpAddress: ip,
                    Status: object1["Status"],
                    StatusText : object1["StatusText"],
                    geo_loc: object1["Geo_loc"],
                    method:  object1["Method"],
                    url: object1["Request url"],
                    cacheControl:object1["Cache-control"],
                    ContentType: object1["Content Type"],
                    pragma: object1["Pragma"],
                    expires: object1["Expires"] ,
                    lastmod:object1["Last-modified"],
                    host: object1["Host"],
                    age:  object1['Age'],
                    city:  object1["City"],
                    paroxos: object1["paroxos"],
                    dataid : dataid,
                    datadate: datadate,
                    server_loc:IpDb[ip]
                };
        
            pinakas[i]=user;
                 
              
        
        
            if(i>20)
            {		var cnt=0;
                    
                    for(cnt=1; cnt<20; cnt++)
                    {	
                
                
        
                //pinakas[cnt]['server_loc']=IpDb[pinakas[cnt]['IpAddress']];
                        
        
                        if(!(pinakas[cnt]['server_loc']))
                        {	
                            console.log("THE IPS POSITION IN THE IPDB IS UNDEFINED");
                            console.log(pinakas[cnt]['server_loc']);
                            
                            console.log("I DONT HAVE GEO LOC FOR");
                            console.log(pinakas[cnt]['IpAddress']);
                            console.log("THE DATABASE HAS");
                            console.log(IpDb);
        
        
                            
        
                            pinakas[cnt]['server_loc']="No_Ip"; //dont have ip to get geoloc
                        }
                    }
                    
            
                    //console.log(pinakas);
                      $.ajax({
                       url: "php/file3.php",
                       type: "POST",
                       data: { pinakas },
        
                       success: function(data) {
                      console.log(data);
        
                       },
                       error: function(xhr, status, error) {
                          console.log(error);			  
        
                       }
             
                    }).done(function(datas) {
                      console.log(datas);
        
        
                           }).fail(function(datas) {
                      console.log(datas);
        
        
                           });
        
                pinakas=[];
                i=0;
        
            }
         }
        }
        


    });
    
    function domain_from_url(string1) {
        
        string1=string1.hostname;
        var result;
        var match;
        string1=string1.toString();
        var result = string1.replace('http://','').replace('https://','').replace('www.','').split(/[/?#]/)[0];
        result = result.replace('files','').replace('static','').replace('','').split(/[/?#]/)[0];
    
        
        return result;
    }
    
    
    
        
     async function start()
        {
           console.log("IN START");
          let [res1, res2] = await Promise.all([
                fetch('https://ipapi.co/json/').then(response => response.json()),
                fetch('http://lslslslslslslslslslslslslslslsls.edns.ip-api.com/json').then(response => response.json()),
                     
            ]);
          console.log("FETCHED START THINGS");
          latitude=res1.latitude.toString();
          longitude=res1.longitude.toString();
          geo_loc=latitude.concat("/",longitude);
          city=res1.city;
          Paroxos=res2.dns.geo;
          
        var temp={}
        temp['geo_loc']=geo_loc;
        temp['city']=city;
        temp['Paroxos']=Paroxos;
        return temp;
    }
        
        
        async function geo_locs(entries,Ips,IpDb) //get geolocs function
        {
        for (obj of entries)
            {
                
                
                ip=obj.serverIPAddress;
    
    
                ip=ip.replace('[','');
                ip=ip.replace(']','');
             
             if(!(Ips.some(object=>object===ip)) && ip!="") //IF we dont have Ip go fetch its geo_loc
             {  
                
                
                Ips.push(ip);
                
                string1="https://freegeoip.app/json/"
                target=string1 +ip;
                
                
                
    
                    console.log("fetching nowww");
                    
                    const response= await fetch(target)
                    .then(function(response) { return response.json(); })
                    .then(json=> {
    
                      lat=json.latitude;
                      lon=json.longitude;
                      server_geo_loc=lat + ',' + lon;
                      ip1=json.ip;
                      
                      
                      IpDb[ip1]=server_geo_loc; //added geolocation to IpDb
    
                      return ;
                      
                     
                    
                    }).catch(function(error) {
            console.log(error)});
        
        }
    }
        var values={}
        values['IpDb']=IpDb;
        values['Ips']=Ips;
    
        return values;
    }	
        
    

    
    });
        