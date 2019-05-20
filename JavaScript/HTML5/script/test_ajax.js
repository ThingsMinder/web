'use strict'

/*
function loadXMLDoc(){
    var xmlhttp;
    if(window.XMLHttpRequest){
        xmlhttp = new XMLHttpRequest();
    }else{
        xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
    }
    xmlhttp.onreadystatechange = function(){
        if(xmlhttp.readyState == 4 && xmlhttp.status == 200){
            document.getElementById('myDiv').innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open('GET','ajax.txt',true);
    xmlhttp.send();
}
*/

$(document).ready(function(){
    $("button").click(function(){
        $("#myDiv").load('ajax.txt',function(responseTxt,statusTxt,xhr){
            if(statusTxt == "success")
                alert('外部加载成功');
            if(statusTxt == "error")
                alert('error: ' + xhr.status + ': ' + xhr.statusText);
        });
    });
});