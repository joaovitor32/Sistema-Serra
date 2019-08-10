<?php
    $data=json_decode(file_get_contents('php://input'));
    if(!empty($_POST['action'])){
        if($_POST['action']=='CADASTRO_LIGACAO'){
            include '../Model/Ligacao.php';
            $ligacao=new Ligacao();
            $ligacao->setData($_POST['data']);
            $ligacao->setDescricao($_POST['descricao']);
            $ligacao->setTelefone($_POST['telefone']);
            $ligacao->setNomeAtendente($_POST['nomeAtendente']);
            $ligacao->setNomeEmpresa($_POST['nomeEmpresa']);
            $ligacao->setRamo($_POST['ramo']);
            $ligacao->createLigacao();
        }
    }
    if(!empty($data)){
        if($data->action=='VISUALIZAR_LIGACOES'){
            include '../Model/Ligacao.php';
            $ligacao = new Ligacao();
            echo $ligacao->listaLigacaoJson();
        }
    }
?>
