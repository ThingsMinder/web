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

*/

var d = new Date();
var time = d.getHours();

if(time < 10){
    document.write('<b>Good morning</b>')
}else if(time>=10 && time<20){
    document.write('<b>Good afternoon</b>')
}else{
    document.write("<b>Hello</b>")
}