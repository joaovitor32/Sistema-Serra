$(document).ready(function(){
    var botaoCadastroAcao=document.getElementById('botao-cadastro-acao');
    botaoCadastroAcao.addEventListener('click',()=>{
        newCadastroAcao();
    });
});
function newCadastroAcao(){
    let form=document.getElementById('frm-cad-acao');
    var dadosAcao=new FormData(form);
    $.ajax({
        type:"POST",
        url:"../Controler/Acao.php",
        data:dadosAcao,
        cache:false,
        contentType:false,
        processData:false
    });
}