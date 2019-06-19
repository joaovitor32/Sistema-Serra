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
                session_start();
                if($novoLogin->grantAcess()){
                    $_SESSION['Login1']=$novoLogin->getLogin();
                    $_SESSION['Senha']=$novoLogin->getSenha();
                    echo true; 
                }else{
                    echo false;
                }
            break;
            case 'SAIR_LOGIN':
                session_start();
                $_SESSION=array();
                if(session_destroy()){
                    include '../Model/Login.php';
                    $login=new Login();
                    unset($_COOKIE['Login1']);
                    unset($_COOKIE['Senha']);
                    $login->setLogin(null);
                    $login->setSenha(null);
                    unset($_SESSION['Login1']);
                    unset($_SESSION['Senha']);
                    session_register_shutdown(); 
                    echo true;
                    exit();
                }
            break;
        }
    }
?>