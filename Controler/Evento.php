<?php 
    if(!empty($_POST['action'])){
        switch($_POST['action']){
            case 'VISUALIZACAO_EVENTOS':
                include '../Model/Evento.php';
                $eventosMembro=new Evento();
                $codMembro=$_POST['codMembro'];
                $eventosMembro->setCodMembro($codMembro);
                echo $eventosMembro->listagemEventosMembroJSON();
                break;
            case 'NOVO_CADASTRO_EVENTO':
                include '../Model/Evento.php';
                $evento=new Evento();
                $evento->setNomeEvento($_POST['Nome']);
                $evento->setData($_POST['Data']);
                $evento->setDescricaoEvento($_POST['Descricao']);
                $evento->createEvento();
                break;
        }
    }
?>