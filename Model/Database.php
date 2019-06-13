<?php

    $usuario='root';
    $senha='';
    try{
        
        $conexao=new PDO('mysql:host=127.0.0.1;dbname=cadastroserra',$usuario,$senha);
        

    }catch(PDOException $e){
        echo $e->getMessage();
    }
?>