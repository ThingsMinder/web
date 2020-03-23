//var hei = window.innerHeight;
var wid = window.innerWidth || document.body.clientWidth;
function picsChange(){
    if(window.innerHeight != 0){
        document.getElementById('ac1').innerHTML = "<img" + " " + "src='pics/index_img_1.jpg'" + " " + "width=" + wid + " " + ">";
        document.getElementById('ac2').innerHTML = "<img" + " " + "src='pics/index_img_2.jpg'" + " " + "width=" + wid + " " + ">";
        document.getElementById('ac3').innerHTML = "<img" + " " + "src='pics/index_img_3.jpg'" + " " + "width=" + wid + " " + ">";
        document.getElementById('ac4').innerHTML = "<img" + " " + "src='pics/index_img_4.jpg'" + " " + "width=" + wid + " " + ">";
    }
}

picsChange();

picsChange();
picsChange();