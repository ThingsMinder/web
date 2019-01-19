'use strict'


/*
$(document).ready(function(){
    $('button').click(function(){
        $('#div1').fadeToggle();
        $('#div2').fadeToggle('slow');
        $('#div3').fadeToggle(3000);
    });
});


$(document).ready(function(){
    $('button').click(function(){
        $('#div1').fadeTo(1000,0.1);
        $('#div2').fadeTo(2000,0.2);
        $('#div3').fadeTo(3000,0.3);
    });
});
*/

//本测试程序有问题未解决
/*
$(document).ready(function(){
    $('button').click(function(){
        while(1){
            $('#p1').css('color','red')
                .slideUp(2000)
                .slideDown(2000)
                .slideUp(2000)
                .slideDown(2000);
        }
    });
});
*/

/*
$(document).ready(function(){
    $('button').click(function(){
        alert($('#inet').attr('href'));
    });
});
*/

/*
$(document).ready(function(){
    $('#btn1').click(function(){
        $('#p1').text('Hello,No1');
    });
    $('#btn2').click(function(){
        $('#p2').html('<b>Hello,No2</b>');
    });
    $('#btn3').click(function(){
        $('#test').val('Hello,No3');
    });
});
*/

$(document).ready(function(){
    $('#addText').click(function(){
        $('p').prepend('<b>Hello,Added</b>');
    });
    $('#addList').click(function(){
        for(var i=0;i<5;i++){
            $('ol').prepend("<li>" + i + "</li>");
        }
    });  
});



