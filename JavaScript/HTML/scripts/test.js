'use strict'

/*
alert("Hello");
document.write("<h1>Hello</h1>");
function message(){
    alert("Hello")
}
{
document.write('<h1>这是标题1</h1>');
document.write('<p>这是一个段落</p>');
document.write('<p>这是另一个段落</p>');
}


var firstname = 'John';
document.write(firstname);
document.write('<br>')
firstname = 'Lee';
document.write(firstname);



var d = new Date();
var time = d.getHours();

if(time < 10){
    document.write('<b>Good morning</b>')
}else if(time>=10 && time<20){
    document.write('<b>Good afternoon</b>')
}else{
    document.write("<b>Hello</b>")
}


var r = Math.random();
alert(r);
if(r>0.5){
    document.write("<a href='http://www.in-et.com'>learn web</a>")
}else{
    document.write("<a href='http:/www.in-et.com'>learn Microsoft</a>")
}
alert(r);


function disp(){
    alert('hello')
}

*/


//抽奖游戏


function award(){
    var r = Math.random(10);
    var arr = ['Fleix','Grace','Neil','Shmily','emilie'];
    /*
    for(i=0;i<=4;i++){

    }
    */

    function award1(){
        
           if(r < 0.2){
                alert("获奖者是： " + arr[0]);
            }else if(r>=0.2 && r<0.4){
                alert("获奖者是： " + arr[1]);
            }else if(r>=0.4 && r<0.6){
                alert("获奖者是： " + arr[2]);
            }else if(r>=0.6 && r<0.8){
                alert('获奖者是： ' + arr[3]);
            }else{
                alert('获奖者是： ' + arr[4]);
            }
            alert(r); 
            alert('奖金金额是：' + parseInt(r*10000));
        }
        
    //var intr = parseInt(r);
        
    
    return award1();
}


/*
function show_confirm(){
    var r = confirm('Press a button');
    if(r==true){
        alert('ok');
    }else{
        alert('cancel');
    }
}
*/


