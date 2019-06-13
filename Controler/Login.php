<?php
    if(!empty($_POST['action'])){
        $result='';
        switch($_POST['action']){
            case 'NOVO_LOGIN':
                include '../Model/Login.php';
                $novoLogin=new Login();
                $novoLogin->setLogin($_POST['login']);
                $novoLogin->setSenha($_POST['senha']);
                if($novoLogin->grantAcess()){
                    session_start();
                    $_SESSION['Login1']=$novoLogin->getLogin();
                    $_SESSION['Senha']=$novoLogin->getSenha();
                    header("location: ../View/Gerencia.php"); 
                }
                break;
        }
    }
?>