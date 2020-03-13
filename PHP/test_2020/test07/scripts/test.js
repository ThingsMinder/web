//var hei = window.innerHeight;
//var wid = window.innerWidth;
function picsChange(){
    if(window.innerHeight != 0){
        document.getElementById('ac1').innerHTML = "<img" + " " + "src='pics/index_img_1.jpg'" + " " + "width=" + window.innerWidth + " " + ">";
        document.getElementById('ac2').innerHTML = "<img" + " " + "src='pics/index_img_2.jpg'" + " " + "width=" + window.innerWidth + " " + ">";
        document.getElementById('ac3').innerHTML = "<img" + " " + "src='pics/index_img_3.jpg'" + " " + "width=" + window.innerWidth + " " + ">";
        document.getElementById('ac4').innerHTML = "<img" + " " + "src='pics/index_img_4.jpg'" + " " + "width=" + window.innerWidth + " " + ">";
    }
}

picsChange();

