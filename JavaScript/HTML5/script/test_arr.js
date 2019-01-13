'use strict'

var arr = ['f0','f1','f2','f3','f4','f5','f6','f7','f8','f9','f10'];
var arr_past = [];
var num3_1,num3_2,num3_3,num2_1,num2_2,num1_1;
function choujiang3(){
    var num3_1 = Math.floor(Math.random()*10);
    var num3_2 = Math.floor(Math.random()*10);
    var num3_3 = Math.floor(Math.random()*10);
    while(num3_1 === num3_2 || num3_2 === num3_3 || num3_1 === num3_3){ 
        num3_2 = Math.floor(Math.random()*10);
        num3_3 = Math.floor(Math.random()*10);
    }
    document.getElementById('num_3_0_1').innerHTML = "第一位获奖者是：" + arr[num3_1];
    document.getElementById('num_3_0_2').innerHTML = "第二位获奖者是：" +  arr[num3_2];
    document.getElementById('num_3_0_3').innerHTML = "第三位获奖者是：" +  arr[num3_3];

    arr_past.push(arr[num3_1],arr[num3_2],arr[num3_3]);

    return  arr_past;



}

function show3(){
    document.getElementById('num_3_1').innerHTML = "三等奖获得者为：" + arr_past + '<br>'
                                                 + '暂未获奖得人有：' ;
}

