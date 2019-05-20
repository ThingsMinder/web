'use strict'

var arr_for = ['f0','f1','f2','f3','f4','f5','f6','f7','f8','f9','f10'];
var arr_past = [];
var arr_for1,arr_for2;
function choujiang1(){  
    document.getElementById('btn_num_1').hidden = true;
    var num = Math.floor(Math.random()*10)
    document.getElementById('num_1').innerHTML = "一等奖获得者：" + '<br>' + arr_for[num];
    var arr_past1 = arr_past.push(arr_for[num]);
    if(num != 0){
        //arr_for1 = arr_for.slice(0,num_del1).concat(arr_for.slice(num_del1+1));
        arr_for.splice(num,1);
        arr_for1 = arr_for;
    }else{
        arr_for.shift();
        arr_for1 = arr_for;
    }
    return num,arr_for1,arr_past1;
}

function number1(){
    document.getElementById('num_1_1').innerHTML = "一等奖名单:" + "<br>" + arr_past + "<br>" 
                                                 + "暂未获奖名单:" + "<br>" + arr_for1; 
                                                 
}

var arr_past2 = [];
function choujiang2(){  


    document.getElementById('line').innerHTML = '--------------------------------------------------------';
    document.getElementById('btn_num_2').hidden = true;
    var num1,num2;
    num1 = Math.floor(Math.random()*10);
    num2 = Math.floor(Math.random()*10);
    while(num1 === num2){
        num2 = Math.floor(Math.random()*10);
     };
    document.getElementById('num_2').innerHTML = "二等奖获得者：" + '<br>' + arr_for1[num1] + "&" + arr_for1[num2];
    arr_past2.push(arr_for1[num1],arr_for1[num2]);

    if(num1 < num2){
        if(num1 !== 0 && num2 !==1){
            arr_for2 = arr_for1.slice(0,num1).concat(arr_for1.slice(num1+1,num2)).concat(arr_for1.slice(num2+1));
        }else if(num1 === 0 && num2 !== 1){
            arr_for2 = arr_for1.slice(1,num2).concat(arr_for1.slice(num2+1));        
        }else if(num1 === 0 && num2 === 1){
            arr_for2 = arr_for1.slice(2);            
        }    
    }else{
        if(num2 !== 0 && num1 !==1){
            arr_for2 = arr_for1.slice(0,num2).concat(arr_for1.slice(num2+1,num1)).concat(arr_for1.slice(num1+1));

        }else if(num2 === 0 && num1 !== 1){
            arr_for2 = arr_for1.slice(1,num1).concat(arr_for1.slice(num1+1));           
        }else if(num2 === 0 && num1 === 1){
            arr_for2 = arr_for1.slice(2);             
        }  
    }
    return arr_for1,arr_for2,arr_past2;
}

function number2(){
    document.getElementById('num_2_2').innerHTML = "一等奖名单：" + "<br>" + arr_past + "<br>" 
                                                 + "二等奖名单：" + "<br>" + arr_past2 + "<br>"
                                                 + "暂未获奖名单:" + "<br>" + arr_for2; ;


}

