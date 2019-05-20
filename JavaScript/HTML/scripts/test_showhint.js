'use strict'

function showHint(str){
    var xmlhttp;
    if(str.length==0){
        document.getElementById('txtHint').innerHTML='';
        return;
    }
    if(window.XMLHttpRequest){
        xmlhttp = new XMLHttpRequest();
    }else{
        xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
    }
    xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState==4 && xmlhttp.status==200){
            document.getElementById('txtHint').innerHTML=responseText;
        }
    }
    xmlhttp.open('GET','http://localhost:8000/mygit/HTML/ajax/gethint.php?q='+str,true);
    xmlhttp.send();
}