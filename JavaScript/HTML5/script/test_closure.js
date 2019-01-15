'use strict'

/*
var name = 'the window';
var object = {
    name:'the object',
    getNameFunc:function(){
        var that = this;
        return function(){
            return that.name;
        };
    }
};
alert(object.getNameFunc()());
*/

function f1(){
    var n = 99;
    nAdd = function(){n+=1}
    function f2(){
        alert(n);
    }
    return f2;
}

var result = f1();
result();
nAdd();
result();


