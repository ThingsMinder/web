'use strict'

function winner(){
    var winners = new Array(); 
    //function w(){     
        for(var i=0;i<2;i++){
            var wi = prompt('Please input the name:','Felix');   
            if(wi!=null && wi!=''){
                winners[i] = wi;
            }else{
                document.write('Please try again' + "<br>");
            }
        }
    //}
    return winners;   
}

function disp_winner(){
    var w = winner();
    var winner_num = new Array();    
    //var wr1,wr2;
    for(var j in w){
        var wi_num = parseInt(Math.random()*20000)
        if(wi_num<=6000){
            winner_num[j] = wi_num;
            document.write(w[j] + "的年终奖是： " + winner_num[j] + '<br>');
        //wr1 = w[j] + "的年终奖是： " + winner_num[j] + '<br>';
        //document.write("<h4 align='center'>wr1</h4>")
        }else{
            winner_num[j] = wi_num - 4000;
            document.write(w[j] + "的年终奖是： " + winner_num[j] + "<br>");
        //wr2 = w[j] + "的年终奖是： " + winner_num[j] + "<br>";
        //document.write("<h4 align='center'>wr2</h4>");
        } 
    }
    //document.location.href='/index.html';
}

