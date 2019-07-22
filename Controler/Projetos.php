<?php
    if(!empty($_POST['action'])){
        switch($_POST['action']){
            case 'VISUALIZACAO_PROJETOS':
                include '../Model/Projeto.php';
                $projetosMembro=new Projetos();
                $codMembro=$_POST['codMembro'];
                $projetosMembro->setCodMembro($codMembro);
                echo $projetosMembro->listagemProjetosMembroJSON();
                break;
            case 'CADASTRO_PROJETO':
                include '../Model/Projeto.php';
                $projeto=new Projetos();
                $projeto->setNome($_POST['Nome']);
                $projeto->setDataIni($_POST['DataIni']);
                $projeto->setDataFim($_POST['DataFim']);
                $projeto->setPreco($_POST['Preco']);
                $projeto->setDescricao($_POST['Descricao']);
                $projeto->setContratante($_POST['Contratante']);
                $projeto->createProjeto();
                break;
        }
    }
?>