$(document).ready(function(){
    var botaoNovoEvento=document.getElementById('botao-cadastro-evento');
    botaoNovoEvento.addEventListener('click',()=>{
        newCadastroEvento();
    });
});
function newCadastroEvento(){
    let form=document.getElementById('frm-cad-evento');
    var dadosEvento=new FormData(form);
    $.ajax({
        type:"POST",
        url:"../Controler/Evento.php",
        data:dadosEvento,

        cache:false,
        contentType:false,
        processData:false,
    });
}