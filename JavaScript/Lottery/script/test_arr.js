'use strict'

var arr = ['Felix','Shmily','Neil','Kitone','Saeed','Tony','Vivi','emilie','Sean','Grace'];
var num1,num2_1,num2_2,num3_1,num3_2,num3_3;
var arr_past = [];
var arrCopy = arr.slice();
function lottery31(){
    alert('备选人数合计：' + arr.length + '人，'+ '他们分别是： ' + arr);
    num3_1 = Math.floor(Math.random()*10);
    //alert(num3_1);
    while(num3_1 === 0){
        num3_1 = Math.floor(Math.random()*10);
    }
    arr_past.push(arr[num3_1]);
    arr.splice(num3_1,1);
    document.getElementById('num3_1').value = arr_past[arr_past.length-1] + '  '
                                            + '奖金：' + num3_1 *100;
    //document.getElementById('num31').disabled = disabled;
    return arr,arr_past,num3_1;
}

function lottery32(){
    alert('备选人数合计：' + arr.length + '人，'+ '他们分别是： ' + arr);
    num3_2 = Math.floor(Math.random()*10);
    while(num3_2>arr.length || num3_2 === 0){
        num3_2 = Math.floor(Math.random()*10);
    }    
    arr_past.push(arr[num3_2]);
    arr.splice(num3_2,1);
    document.getElementById('num3_2').value = arr_past[arr_past.length-1] + '  '
                                            + '奖金：' + num3_2 *100;
    //document.getElementById('num31').disabled = disabled;
    return arr,arr_past,num3_2;
}

function lottery33(){
    alert('备选人数合计：' + arr.length + '人，'+ '他们分别是： ' + arr);
    num3_3 = Math.floor(Math.random()*10);
    while(num3_3>arr.length || num3_3 === 0){
        num3_3 = Math.floor(Math.random()*10);
    }  
    arr_past.push(arr[num3_3]);
    arr.splice(num3_3,1);
    document.getElementById('num3_3').value = arr_past[arr_past.length-1] + '  '
                                            + '奖金：' + num3_3 *100;
    //document.getElementById('num31').disabled = disabled;
    return arr,arr_past,num3_3;
}

function lottery21(){
    alert('备选人数合计：' + arr.length + '人，'+ '他们分别是： ' + arr);
    num2_1 = Math.floor(Math.random()*10);
    while(num2_1>arr.length || num2_1 === 0){
        num2_1 = Math.floor(Math.random()*10);
    }  
    arr_past.push(arr[num2_1]);
    arr.splice(num2_1,1);
    document.getElementById('num2_1').value = arr_past[arr_past.length-1] + '  '
                                            + '奖金：' + num2_1 *500;
    //document.getElementById('num31').disabled = disabled;
    return arr,arr_past,num2_1;
}

function lottery22(){
    alert('备选人数合计：' + arr.length + '人，'+ '他们分别是： ' + arr);
    num2_2 = Math.floor(Math.random()*10);
    while(num2_2>arr.length || num2_2 === 0){
        num2_2 = Math.floor(Math.random()*10);
    }  
    arr_past.push(arr[num2_2]);
    arr.splice(num2_2,1);
    document.getElementById('num2_2').value = arr_past[arr_past.length-1] + '  '
                                            + '奖金：' + num2_2 *500;
    //document.getElementById('num31').disabled = disabled;
    return arr,arr_past,num2_2;
}

function lottery1(){
    alert('备选人数合计：' + arr.length + '人，'+ '他们分别是： ' + arr);
    num1 = Math.floor(Math.random()*10);
    while(num1>arr.length || num1 === 0){
        num1 = Math.floor(Math.random()*10);
    }  
    arr_past.push(arr[num1]);
    arr.splice(num1,1);
    document.getElementById('num1').value = arr_past[arr_past.length-1] + '  '
                                          + '奖金：' + num1 *1000;
    //document.getElementById('num31').disabled = disabled;
    return arr,arr_past,num1;
}

function show(){
    document.getElementById('lu').innerHTML = 'Lucky Star:'
    document.getElementById('lp').innerHTML = "一等奖: " + arr_past[5] + '<br>'
                                            + "二等奖: " + arr_past[3] + "&" + arr_past[4] + "<br>"
                                            + '三等奖: ' + arr_past[0] + "&" + arr_past[1] + "&" + arr_past[2] + "<br>";
    document.getElementById('un').innerHTML = 'Cute Baby:';
    document.getElementById('up').innerHTML = arr;
}