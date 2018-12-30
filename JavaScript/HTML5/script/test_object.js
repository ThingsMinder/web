'use strict'

/*
var now = new Date();
document.write(now + '<br>');
document.write(now.getFullYear() + '<br>');
document.write(now.getMonth() + '<br>');
document.write(now.getHours() + '<br>');
document.write(now.getDate() + '<br>');
document.write(now.getDay() + '<br>');
document.write(now.getTime() + '<br>');


if(now.getMonth() === 1 && now.getDate() === 14){
    if(0 <= now.getHours() <= 24){
        alert('Dear');
    }else{
        alert('日期已过');
    }
}else{
    alert('不是当月');
}


var xiaoming = {
    name:'小明',
    age:15,
    gender:true,
    height:1.65,
    grade:null,
    skills:['JS','Java','Python','H5'],
    toJSON:function(){
        return {
            'name':this.name,
            'Age':this.age
        };
    }
};

function convert(key,value){
    if(typeof value === 'string'){
        return value.toUpperCase();
    }
    return value;
}
*/

/*
//alert(JSON.stringify(xiaoming,convert,' '));
alert(JSON.stringify(xiaoming));
*/

/*
var Student = {
    name:'Robot',
    height:1.2,
    run:function(){
        return this.name + ' is running...';
    }

};

function createStudent(name){
    var s = Object.create(Student);
    s.name = name;
    return s;
}

var xiaoming = createStudent('小明');
alert(xiaoming.name);
alert(xiaoming.run());
document.write(xiaoming.run());
alert(xiaoming.__proto__ === Student);
*/

function Student(props){
    this.name = props.name || 'Unnamed';
}

Student.prototype.hello = function(){
    alert('Hello, ' + this.name + '!');
}

function PrimaryStudent(props){
    Student.call(this,props);
    this.grade = props.grade || 1;
}

inherits(PrimaryStudent,Student);

PrimaryStudent.prototype.getGrade = function(){
    return this.grade;
}