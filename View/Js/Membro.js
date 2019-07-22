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
//Visualizacao de membro
//Funções relacionadas a tabela
function startTabela(){
    $(document).ready(function(){
        $('#myTable').DataTable();
        listaTabela();
    });
}
function listaTabela(){
    var lista = '';
    let tabelaBox=document.getElementById('boxTabela');
    while(tabelaBox.firstChild){
        tabelaBox.removeChild(tabelaBox.firstChild);
    }
    $.post('../Controler/Membro.php',{action:'LISTA_MEMBRO'},function(membros){
        $.each(membros,function(indice,membro){
                lista += '<tr>';
                lista += ' <td >'+membro.Nome+'</td>';
                lista += ' <td><img onclick="redirectMembroDados('+membro.CodMembro+');" class="lupaRedirect" src="./Icons/lupa.svg"></td>';
                lista += ' <td>'+membro.Curso+'</td>';
                lista += ' <td>'+membro.AnoDeEntrada+'</td>';
                lista += '<td>'+membro.Cargo+'</td>';
                lista += ' <td>'+membro.Telefone+'</td>';
                lista += ' <td>'+membro.CPF+'</td>';
                lista += ' <td>'+membro.NomeRua+'</td>';
                lista += ' <td>'+membro.Numero+'</td>';
                lista += ' <td>'+membro.Email+'</td>';
                lista += ' <td>'+membro.Bairro+'</td>';
                lista += ' <td>'+membro.DataNascimento+'</td>';
                lista += ' <td>'+membro.Estado+'</td>';
                lista += '</tr>';
        });
        tabelaBox.innerHTML=lista;
    },'json');
}
function redirectMembroDados(codMembro){
    window.location.href="../View/FolhaMembro.php?codMembro="+codMembro;
}