'use strict'

function loadXMLDoc(){
    /*
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
    xmlhttp.open("GET","http://localhost:8000/mygit/HTML/q/ajax/test1.txt",true);
    xmlhttp.send();
    */

    function loadXMLDoc(){
        var f = document.getElementById('file').files[0];
        var r = new FileReader();
        r.onload = function(){
            document.getElementById('myDiv').innerHTML = this.result;
        }
        r.readAsText(f,'utf-8');
    }
}