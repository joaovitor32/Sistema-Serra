<?php
    if(!empty($_POST['action'])){
        switch($_POST['action']){
            case 'VISUALIZACAO_ACAO':
                include('../Model/Acao.php');
                $acaoMembro=new Acao();
                $codMembro=$_POST['codMembro'];
                $acaoMembro->setCodMembro($codMembro);
                echo $acaoMembro->listagemAcaoMembroJSON();
                break;
            case 'CADASTRO_ACAO':
                include ('../Model/Acao.php');
                $acao=new Acao();
                $acao->setNome($_POST['Nome']);
                $acao->setDescricao($_POST['Descricao']);
                $acao->setData($_POST['Data']);
                $acao->createAcao();
                break;

        }
    }
?>