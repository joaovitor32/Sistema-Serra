<?php 
    if(!empty($_POST['action'])){
        switch($_POST['action']){
            case 'VISUALIZACAO_TREINAMENTOS':
                include '../Model/Treinamento.php';
                $treinamentosMembro=new Treinamento();
                $codMembro=$_POST['codMembro'];
                $treinamentosMembro->setCodMembro($codMembro);
                echo $treinamentosMembro->listagemTreinamentosMembroJSON();
                break;
        }
    }
?>      