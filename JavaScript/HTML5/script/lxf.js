'use strict'


/*
function showWelcome(arr){
    var A = '欢迎';
    var arr;
    for(var i=0;i<arr.length-2;i++){
        A = A + arr[i] + ',';
    }
    document.write(A + arr[arr.length-2] + '和' + arr[arr.length-1] + '同学！');
}
*/

/*
function Join(name){
    var arr = [];                                                                                              c;
    var name;
    if(name){
        arr.unshift(name);
    }else{
        document.write('Please input your name.')
    }
    return arr;
}
*/

var arr = [];
var arr1 = new Array();
function showName(){   
    var name = document.getElementById('joinname').value;   
    if(name){
        arr.push(name); 
    } 

    function showName1(arr1){
        var nom = [];
        for(var i=0;i<=arr1.length-1;i++){
            for(var j=1;j<=i+1;j++){
                var nom1 = '第' + j + "位参与者是： ";
                nom.push(nom1 + arr1[i] + '<br>'); 
                //document.getElementById('input').innerHTML = nom;
            } 
        } 
        return nom;
    }

    for(var a=0;a<showName1(arr).length;a++){
        document.getElementById('input').innerHTML = nom[a];
    }
}


   

   




//showWelcome();
