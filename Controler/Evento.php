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
        }
    }
?>