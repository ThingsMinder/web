'use strict'

/*
var num1,num2,num3;
num1 = document.getElementById('num1').value;
num2 = document.getElementById('num2').value;
*/

function res(){
    var num1,num2,num3;
    num1 = document.getElementById('num1').value;
    num2 = document.getElementById('num2').value;

    if(num1!=null && num2!=null){
        num3 = num1 + num2;
    }
    //return num3;
    document.getElementById('num3').value = num3;
    return;
}