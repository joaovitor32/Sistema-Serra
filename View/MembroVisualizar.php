<?php
    session_start();
?>
<!DOCTYPE HTML>
<html> 
    <head>
        <title>Visualizar</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./Css/BarraLateral/MenuLateralSistema.css">
        <link rel="stylesheet" type="text/css" href="./Css/MembroVisualizar.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!-------Data table-------->
        <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
    </head>
    <body>
        <?php
            include 'BarraLateralSistema.php';
        ?>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 offset-md-1">
                        <table id="myTable">
                            <thead>
                                <tr>
                                    <th>Nome: </th>
                                    <th>Visualizar ficha: </th>
                                    <th>Curso: </th>
                                    <th>Ano de Entrada: </th>
                                    <th>Cargo: </th>
                                    <th>Telefone: </th>
                                    <th>CPF: </th>
                                    <th>Rua: </th>
                                    <th>Número: </th>
                                    <th>Email: </th>
                                    <th>Bairro: </th>
                                    <th>Data de nascimento: </th>
                                    <th>Estado: </th>
                                </tr>
                            </thead>
                            <tbody id="boxTabela"> 
                            
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <script type="text/javascript" src="jsBootstrap/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="DataTables/datatables.min.js"></script>
        <script type="text/javascript" src="Js/BarraLateral.js"></script>
       <script type="text/javascript" src="Js/MembroVisualizar.js"></script>
       <script type="text/javascript">
            function carregaTabela(){
                $(document).ready(function(){
                    $('#myTable').DataTable();
                    var tabelaBox=document.getElementById("boxTabela");
                    $.post('../Controler/Membro.php',{ action:'LISTA_MEMBRO'},function(membros){
                        var lista = '';
                        $.each(membros,function(indice,membro){
                            lista+='<tr>';
                            lista+='<td>'+membro.Nome+'</td>';
                            lista+='</tr>';
                        });
                        while(tabelaBox.firstChild){
                            tabelaBox.removeChild(tabelaBox.firstChild);
                        }
                        tabelaBox.appendChild(lista);
                    },'json');
                });
            }
            document.onload=carregaTabela();  
        </script>
    </body>
</html>
