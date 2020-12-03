function saveFile(e) {
    if (results != ""){
    var name = document.getElementById('fileinput').value;
    var res = name.concat('.txt');
    saveData(results, res);
    
    e.preventDefault()}
    else {
      alert("Please Process the file before clicking 'Save'")
    }
  }    
  
  function saveData(data, fileName) {
      var a = document.createElement("a");
      document.body.appendChild(a);
      a.style = "display: none";
  
      var json = JSON.stringify(data),
          blob = new Blob([data], {type: "text/plain;charset=utf-8"}),
          url = window.URL.createObjectURL(blob);
      a.href = url;
      a.download = fileName;
      a.click();
      window.URL.revokeObjectURL(url);
      location.reload();
  
  }
  
    var results="";
      
      
      
  function domain_from_url(string1) {
      string1=string1.hostname;
      var result;
      var match;
      string1=string1.toString();
      var result = string1.replace('http://','').replace('https://','').replace('www.','').split(/[/?#]/)[0];
      var result = result.replace('files','').replace('static','').replace('','').split(/[/?#]/)[0];
  
      
      return result;
  }
  
      
      
   async function start()
      { 
        let [res1, res2] = await Promise.all([
              fetch('https://ipapi.co/json/').then(response => response.json()),
              //fetch('http://lslslslslslslslslslslslslslslsls.edns.ip-api.com/json').then(response => response.json()),
          
          ]);
        //console.log(res1) ;
       results=results.concat("\n\n\nUser latitude:",res1.latitude);
       results=results.concat("\nUser longitude:",res1.longitude);
       console.log(results) ;
      }
      
  
      
    function ProcFile() 
   {
      
    
      start();
      var input, file, fr;
      var i=0;
      
      
  
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
            alert("Please select a file before clicking 'Process'");
        }
  
         else   {

                  var x = document.getElementById('btnsave');
                  x.style.display = 'block';
                  file = input.files[0];
                  fr = new FileReader();
  
                   
                    fr.onload = receivedText;
                     fr.readAsText(file);
                  
                }
        
        
   
    
      
      
      
      function receivedText(e) 
    {
  
          let lines = e.target.result;
          var newArr = JSON.parse(lines); 
          var entries = newArr.log.entries;
  
      
      
      entries.forEach(inentries);
  
  
          function inentries(obj)
      {
                  results=results.concat("\n\n\nStarted date Time:",obj.startedDateTime);
                    results=results.concat("\nWait:",obj.timings.wait);
                    results=results.concat("\nServer Ip Adress:",obj.serverIPAddress);
  
  
                    if(obj.request.method)
                    {
                          results=results.concat("\nMethod:",obj.request.method);
                    }
  
                  if(obj.request.url)
                    {
  
                        let temp1=new URL(obj.request.url);
                        temp1=domain_from_url(temp1);
                        //console.log(temp1);
                        results=results.concat("\nRequest url:",temp1);
                    }
  
  
  
                  head=obj.response.headers;
             if(head.some(object=>object.name==="content-type"))
                     {
  
                        let obj = head.find(obj => obj.name == 'content-type');
                        results=results.concat("\nContent Type:",obj.value);
                     }
  
  
             if(head.some(object=>object.name==="cache-control"))
                 {
  
                    let obj = head.find(obj => obj.name == 'cache-control');
                    results=results.concat("\ncache-control:",obj.value);
                 }
  
             if(head.some(object=>object.name==="pragma"))
                 {
  
                    let obj = head.find(obj => obj.name == 'pragma');
                    results=results.concat("\npragma:",obj.value);
                 }
  
  
             if(head.some(object=>object.name==="expires"))
                 {
  
                    let obj = head.find(obj => obj.name == 'expires');
                    results=results.concat("\nexpires:",obj.value);
                 }
  
  
             if(head.some(object=>object.name==="age"))
                 {
  
                    let obj = head.find(obj => obj.name == 'age');
                    results=results.concat("\nAge:",obj.value);
                 }
  
  
             if(head.some(object=>object.name==="last-modified"))
                 {
  
                      let obj = head.find(obj => obj.name == 'last-modified');
                      results=results.concat("\nLast-modified:",obj.value);
                 }
               if(head.some(object=>object.name==="host"))
                 {
  
                        let obj = head.find(obj => obj.name == 'host');
                        results=results.concat("\nHost:",obj.value);
                 }
  
                  if(obj.response.expires)
                    {
                        results=results.concat("",obj.expires);
                    }
  
        
  
        
        
          //document.getElementById("demo").innerHTML = entries.startedDateTime;
  
        } 
        
    }
   }