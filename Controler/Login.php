<?php
    if(!empty($_POST['action'])){
        $result='';
        switch($_POST['action']){
            case 'NOVO_LOGIN':
                include '../Model/Login.php';
                $novoLogin=new Login();
                $login=$_POST['login'];
                $senha=md5($_POST['senha']);
                $novoLogin->setLogin($login);
                $novoLogin->setSenha($senha);
                if($novoLogin->grantAcess()){
                    session_start();
                    $_SESSION['Login1']=$novoLogin->getLogin();
                    $_SESSION['Senha']=$novoLogin->getSenha();
                    echo true; 
                }else{
                    echo false;
                }
                break;
        }
    }
?>