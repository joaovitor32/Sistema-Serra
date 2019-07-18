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
        }
    }
?>