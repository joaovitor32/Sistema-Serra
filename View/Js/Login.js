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
            if(retorno==true){
                window.location='Gerencia.php';
            }
        },'json');
    }
});
window.onload=function lockPage(){
    document.addEventListener("DOMContentLoaded", function(event){
        window.location.assign('Login.php');
      });
}