function fetchCity(str){
    // send request to cities.php
var req=new XMLHttpRequest();
req.open("GET","http://localhost:8080/AJAXExample/cities.php?state="+str,true);
req.send();
 

// response handle from cities.php
req.onreadystatechange=function(){
if(req.readyState==4 && req.status==200){
    document.getElementById("cities").innerHTML=req.responseText;
}
};

    
}