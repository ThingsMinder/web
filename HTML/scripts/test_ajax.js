'use strict'

/*
variable = new XMLHttpRequest();
if(window.XMLHttpRequest){
    xmlhttp = new XMLHttpRequest();
}else{
    xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
}
xmlhttp.open('open','test1.txt',true);
xmlhttp.send();
*/

function loadXMLDoc(){
    var xmlhttp;
    if(window.XMLHttpRequest){
        xmlhttp = new XMLHttpRequest();
    }else{
        xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
    }
    xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState==4 && xmlhttp.status==200){
            document.getElementById('myDiv').innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET","http://127.0.0.1/txt.jsp",true);
    xmlhttp.send();
}