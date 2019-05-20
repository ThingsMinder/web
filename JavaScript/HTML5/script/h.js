'use strict'

var myVideo1 = document.getElementById('video1');
var myVideo2 = document.getElementById('video2');
var myVideo3 = document.getElementById('video3');
var myVideo4 = document.getElementById('video4');
function playPause(){
    if(myVideo1.paused && myVideo2.paused && myVideo3.paused && myVideo4.paused){
        myVideo1.play();
        myVideo2.play();
        myVideo3.play();
        myVideo4.play();
    }else{
        myVideo1.pause(); 
        myVideo2.pause();
        myVideo3.pause();
        myVideo4.pause();
    }           
}
function makeBig(){
    myVideo1.width = 560;
    myVideo2.width = 560;
    myVideo3.width = 560;
    myVideo4.width = 560;
}
function makeSmall(){
    myVideo1.width = 320;
    myVideo2.width = 320;
    myVideo3.width = 320;
    myVideo4.width = 320;
}
function makeNormal(){
    myVideo1.width = 420;
    myVideo2.width = 420;
    myVideo3.width = 420;
    myVideo4.width = 420;
}