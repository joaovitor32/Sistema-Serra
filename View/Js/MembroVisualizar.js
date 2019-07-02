function startTabela(){
    $(document).ready(function(){
        $('#myTable').DataTable();
        listaTabela();
        //listaUsuario();
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
                lista += ' <td>Redirecionamento</td>';
                lista += ' <td>'+membro.Curso+'</td>';
                lista += ' <td>'+membro.AnoDeEntrada+'</td>';
                lista += ' <td>'+membro.Cargo+'</td>';
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