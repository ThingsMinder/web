'use strict'

function message(){
    var txt = '';
    try{
        adddlert('Welcome!')
    }
    catch(err){
        txt = '本页中存在错误。\n\n';
        txt += "点击'确定'继续查看本页,\n";
        txt += "点击'取消'返回首页.\n";
        if(!confirm(txt)){
            document.location.href='/index.html'
        }
    }
}