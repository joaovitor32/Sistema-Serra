<?php
    if(!empty($_POST['action'])){
        $result='';
        switch($_POST['action']){
            case 'LOGIN_SISTEMA':
                include '../Model/Login.php';
                $novoLogin=new Login();
                $novoLogin->setLogin($_POST['login']);
                $novoLogin->setSenha($_POST['senha']);
                if($novoLogin->grantAcess()){
                    header('../View/Gerencia.php');
                }
                break;
        }
    }
?>