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
        }
    }
?>