$(document).ready(function(){
    var botaoNovoProjeto=document.getElementById('botao-cadastro-projeto');
    botaoNovoProjeto.addEventListener('click',()=>{
        newCadastroProjeto();
    });
    function newCadastroProjeto(){
        let form=document.getElementById('frm-cadastro-projeto');
        var dadosProjeto=new FormData(form);
        $.ajax({
            type:'POST',
            url:'../Controler/Projetos.php',
            data:dadosProjeto,
            cache:false,
            contentType:false,
            processData:false
        });
    }
});