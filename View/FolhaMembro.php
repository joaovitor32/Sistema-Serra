<?php
    $codMembro=$_GET['codMembro'];
?>
<!DOCTYPE HTML>
<html> 
    <head>
        <title>Cadastro</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./Css/BarraLateral/MenuLateralSistema.css">
        <link rel="stylesheet" type="text/css" href="./Css/FolhaMembro.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <!---Barra lateral-->
    <body onload='carregaDados("<?php echo $codMembro ?>");'>
        <section>
           <?php
                include 'BarraLateralSistema.php';
           ?>
        </section>
        <section class="displayInfos">
            <div>
                <img id='foto' onload='startFadeInDados();' class='fotoMembro' src="../View/FotoMembro/<?php echo $codMembro?>.jpg">
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 offset-md-1">
                        <div id="compartimentoTabelaProjeto">
                            <div class="tituloTabela">Projetos: </div>
                            <table class="table" >
                                <thead>
                                    <tr>
                                        <th scope="col">Nome: </th>
                                        <th scope="col">Data de Inicio: </th>
                                        <th scope="col">Data fim: </th>
                                        <th scope="col">Preço: </th>
                                        <th scope="col">Descrição: </th>
                                        <th scope="col">Contratante: </th>
                                    </tr>
                                </thead>
                                <tbody id="boxTabelaProjeto"> 
                                
                                </tbody>
                            </table>
                        </div>  
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 offset-md-1">
                        <div id="compartimentoTabelaTreinamento">
                            <div class="tituloTabela">Treinamentos: </div>
                            <table class="table" >
                                <thead>
                                    <tr>
                                        <th scope="col">Duração em dias: </th>
                                        <th scope="col">Horas totais: </th>
                                        <th scope="col">Descrição do treinamento: </th>
                                    </tr>
                                </thead>
                                <tbody id="boxTabelaTreinamento"> 
                                
                                </tbody>
                            </table>
                        </div>  
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 offset-md-1">
                        <div id="compartimentoTabelaEvento">
                            <div class="tituloTabela">Eventos: </div>
                            <table class="table" >
                                <thead>
                                    <tr>
                                        <th scope="col">Nome do evento: </th>
                                        <th scope="col">Data: </th>
                                        <th scope="col">Descrição do evento: </th>
                                    </tr>
                                </thead>
                                <tbody id="boxTabelaEvento"> 
                                
                                </tbody>
                            </table>
                        </div>  
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 offset-md-1">
                        <div id="compartimentoTabelaAcao">
                            <div class="tituloTabela">Ação: </div>
                            <table class="table" >
                                <thead>
                                    <tr>
                                        <th scope="col">Nome do ação: </th>
                                        <th scope="col">Descrição: </th>
                                        <th scope="col">Inicio da ação: </th>
                                        <th scope="col">Inicio da participação: </th>
                                        <th scope="col">Fim da participação </th>
                                        <th scope="col">Atividades: </th>
                                    </tr>
                                </thead>
                                <tbody id="boxTabelaAcao"> 
                                
                                </tbody>
                            </table>
                        </div>  
                    </div>
                </div>
            </div>
        </section>
        <script type="text/javascript" src="Js/BarraLateral.js"></script>
        <script type="text/javascript" src="Js/FolhaMembro.js"></script>
        <script type="text/javascript" src="jsBootstrap/jquery-3.4.1.min.js"></script>
    </body>
</html>
