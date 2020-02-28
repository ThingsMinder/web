
//测试
/*
alert("Hello World!");
alert(2>=3);
alert(NaN === NaN);
alert(isNaN(NaN));
*/

//alert(null == 0);

/*
alert("I \'m \"ok\"\!");
alert("\x41");

var arr = new Array(1,2,3,4);
for(var i = 0; i <= arr.length; i ++){
    
    if(i != arr.length){
        alert(arr[i]);
    }else{
        alert("it's over!");
    }
    
    

    //alert("i= " + i + ",arr" + "[" + i + "]= " + arr[i]);
    
}
*/

'use strict'

/*
document.write('dewfef' + '<br>');

var s = "Hello World!";
for(var i = 0; i < s.length; i ++){
    document.write(s[i]);
    document.write('<br>');
}
//alert('over');

var o = {
    name:"Felix",
    age:"40",
    occupation:"CEO",
    city:"ShangHai",
    hasCar:true
}

document.write("I love " + o.name + ":" + "<br>" + 
               "I know your age is " + o.age + "," + "<br>" + 
               "I know your occupation is " + o.occupation + "," + "<br>" +
               "I know your city is " + o.city + "," + "<br>" + 
               "I know your hasCar is " + o.hasCar + "!" + "<br>") ;

for(var key in o){
    document.write(key + "<br>");
}
*/

/*

var m = new Map();
m.set('felix',66);
m.set('jack',3);
m.set('grace',77);
document.write(m);

*/

/*
var s = ['A','B',"C"];
s.forEach(function(element){
    document.write(element + "<br>");
})
*/

/*
var abs = function(x){
    if(x>0){
        //return x;
        document.write(x + "<br>");
    }else{
        document.write(-x + '<br>');
    }
}

//document.write(abs(10)+"<br>");
//document.write(abs(-10));

abs(10);
abs(-10);
abs(100);
abs(-100);
*/

var c = document.getElementById('myCanvas');
var ctx = c.getContext('2d');
ctx.fillstyle = '#FF0000';
ctx.fillRect(0,0,150,75);