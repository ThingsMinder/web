'use strict'

function abs(){
    var x = document.getElementById('abs').value;
    
    if(typeof x !== "number"){
        var s = 'this is not a number';
        document.getElementById('output').value = s;
    }
    if(arguments.length === 0){
        document.getElementById('output').value = 0;
    }

    if(arguments[0]>=0){
        document.getElementById('output').value = arguments[0];
    }else{
        document.getElementById('output').value = -arguments[0];
    }
}


function foo(a,b,...rest){
    document.write(a+'<br>');
  
    document.write(b+'<br>');
   
    document.write(rest+'<br>');
}

foo(1,2,3,4,5,6);



/*
abs(-9);
abs(2);
abs(0);
abs();
abs(q);
*/

