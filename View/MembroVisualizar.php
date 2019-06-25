<!DOCTYPE HTML>
<html> 
    <head>
        <title>Visualizar</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./Css/BarraLateral/MenuLateralSistema.css">
        <link rel="stylesheet" type="text/css" href="./Css/MembroVisualizar.css">
        <link rel="stylesheet" type="text/css" href="./cssBootstrap/bootstrap.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-------Data table-------->
        <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
    </head>
    <body onload="startTabela();">
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
        <script type="text/javascript" src="./Js/MembroVisualizar.js"></script>
        <script type="text/javascript" src="./jsBootstrap/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="./DataTables/datatables.min.js"></script>
        <script type="text/javascript" src="./Js/BarraLateral.js"></script>
        <script type="text/javascript">
            function startTabela(){
                $(document).ready(function(){
                    $('#myTable').DataTable();
                    listaTabela();
                });
            }
            function listaTabela(){
                let tabelaBox=document.getElementById('boxTabela');
                while(tabelaBox.firstChild){
                    tabelaBox.removeChild(tabelaBox.firstChild);
                }
                $.getJSON('../Controler/Membro.php',{action:'LISTA_MEMBRO'},function(membros){
                    var lista='';
                    for(membro in membros){
                        lista+='<tr>';
                        lista+='<td>'+membro.Nome+'</td>';
                        lista+='</tr>';
                    }
                    tabelaBox.appendChild(lista);
                });
            } 
        </script>
    </body>
</html>
