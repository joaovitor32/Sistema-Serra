<?php
    if(!empty($_POST['action'])){
        switch($_POST['action']){
            case 'VISUALIZACAO_ACAO':
                $acaoMembro=new Acao();
                $codMembro=$_POST['codMembro'];
                $acaoMembro->listagemAcaoMembroJSON();
                break;
        }
    }
?>