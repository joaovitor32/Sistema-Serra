$(document).ready(function(){
    var botaoFechaSessao=document.getElementById('btn-fecha-sessao');
    botaoFechaSessao.addEventListener('click',()=>{
        fechaSessao();
    });
    function fechaSessao(){
        let form=document.getElementById('frm-sair-login');
        var dados=new FormData(form);
        var dadosSerializados=new URLSearchParams(dados).toString();
        $.post('../Controler/Login.php',dadosSerializados,function(retorno){
            if(retorno==true){
                window.location.replace('Login.html');
            }
        },'json');
    }
});
function redirectMembroCadastrar(){
    window.location="MembroCadastrar.php";
}
function redirectMembroVisualizar(){
    window.location="MembroVisualizar.php";
}