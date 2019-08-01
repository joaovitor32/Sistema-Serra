<?php
    if(!empty($_POST['action'])){
        switch($_POST['action']){
            case 'CADASTRO_LIGACAO':
                include '../Model/Ligacao.php';
                $ligacao=new Ligacao();
                $ligacao->setData($_POST['data']);
                $ligacao->setDescricao($_POST['descricao']);
                $ligacao->setTelefone($_POST['telefone']);
                $ligacao->setNomeAtendente($_POST['nomeAtendente']);
                $ligacao->setNomeEmpresa($_POST['nomeEmpresa']);
                $ligacao->setRamo($_POST['ramo']);
                $ligacao->createLigacao();
                break;
        }
    }
?>
