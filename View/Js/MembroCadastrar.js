$(document).ready(function(){
    var botaoNovoCadastro=document.getElementById('botao-cadastro-membro');
    botaoNovoCadastro.addEventListener('click',()=>{
        newCadastro();
    });
    function newCadastro(){
        let form=document.getElementById('frm-cadastro-membro');
        var dadosMembro=new FormData(form);
        $.ajax({
            type:'POST',
            url:"../Controler/Membro.php",
            data:dadosMembro,

            // Tell jQuery not to process data or worry about content-type
            // You *must* include these options!
            cache:false,
            contentType:false,
            processData:false
        });
    }
});