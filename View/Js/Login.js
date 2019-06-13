$(document).ready(function(){
    var botaoVerificaLogin=document.getElementById('botao-novo-login');
    botaoVerificaLogin.addEventListener('click',()=>{
        verificaLogin();
    });
    function verificaLogin(){   
        let form=document.getElementById('frm-novo-login');
        var dados=new FormData(form);
        var dadosSerializados=new URLSearchParams(dados).toString();
        $.post('../Controler/Login.php',dadosSerializados,function(retorno){
        },'json');
    }
});