<?php

    if(! empty($_POST['action']))
    {
        $result='';
        switch($_POST['action']){
            case 'NOVO_CADASTRO_MEMBRO':
                include '../Model/Membro.php';
                $novoMembro=new Membro();
                $novoMembro->setNome($_POST['nome']);
                $novoMembro->setCurso($_POST['curso']);
                $novoMembro->setAnoEntrada($_POST['anodeentrada']);
                $novoMembro->setCargo($_POST['cargo']);
                $novoMembro->setTelefone($_POST['telefone']);
                $novoMembro->setCPF($_POST['cpf']);
                $novoMembro->setEmail($_POST['email']);
                $novoMembro->setBairro($_POST['bairro']);
                $novoMembro->setDataNas($_POST['nascimento']);
                $novoMembro->setNumero($_POST['numero']);
                $novoMembro->setRua($_POST['rua']);
                $novoMembro->setStatus(1);
                $novoMembro->createAluno();
                $result=$_POST['action'];
                echo json_encode(array('result'=>$result));
                break;    
            case 'LISTA_MEMBRO':
                include '../Model/Membro.php';
                $membros = new Membro();
                echo $membros->listaMembrosJson();
                break;
        }
    }else{
echo "bnatata";
        
    }
?>