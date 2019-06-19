$(document).ready(function(){
    var botaoNovoCadastro=document.getElementById('botao-cadastro-membro');
    botaoNovoCadastro.addEventListener('click',()=>{
        newCadastro();
    });
    function newCadastro(){
        let form=document.getElementById('frm-cadastro-membro');
        var dadosMembro=new FormData(form);
        var dadosSerializados=new URLSearchParams(dadosMembro).toString();
        $.post('../Controler/Membro.php',dadosSerializados,function(retorno){
            
        },'json');
    }
});
