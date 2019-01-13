'use strict'

var arr = ['f0','f1','f2','f3','f4','f5','f6','f7','f8','f9','f10'];
var num1,num2_1,num2_2,num3_1,num3_2,num3_3;
var arr_past = [];
function lottery31(){
    num3_1 = Math.floor(Math.random()*10);
    arr_past.push(arr[num3_1]);
    arr.splice(num3_1,1);
    document.getElementById('num3_1').value = arr_past[arr_past.length-1];
    //document.getElementById('num31').disabled = disabled;
    return arr;
}

function lottery32(){
    num3_2 = Math.floor(Math.random()*10);
    arr_past.push(arr[num3_2]);
    arr.splice(num3_2,1);
    document.getElementById('num3_2').value = arr_past[arr_past.length-1];
    //document.getElementById('num31').disabled = disabled;
    return arr;
}

function lottery33(){
    num3_3 = Math.floor(Math.random()*10);
    arr_past.push(arr[num3_3]);
    arr.splice(num3_3,1);
    document.getElementById('num3_3').value = arr_past[arr_past.length-1];
    //document.getElementById('num31').disabled = disabled;
    return arr;
}

function lottery21(){
    num2_1 = Math.floor(Math.random()*10);
    arr_past.push(arr[num2_1]);
    arr.splice(num2_1,1);
    document.getElementById('num2_1').value = arr_past[arr_past.length-1];
    //document.getElementById('num31').disabled = disabled;
    return arr;
}

function lottery22(){
    num2_2 = Math.floor(Math.random()*10);
    arr_past.push(arr[num2_2]);
    arr.splice(num2_2,1);
    document.getElementById('num2_2').value = arr_past[arr_past.length-1];
    //document.getElementById('num31').disabled = disabled;
    return arr;
}

function lottery1(){
    num1 = Math.floor(Math.random()*10);
    arr_past.push(arr[num1]);
    arr.splice(num1,1);
    document.getElementById('num1').value = arr_past[arr_past.length-1];
    document.getElementById('un').innerHTML = 'Unlucky Person:';
    document.getElementById('up').innerHTML = arr;
    //document.getElementById('num31').disabled = disabled;
    return arr;
}