<?php

    $usuario='root';
    $senha='';
    try{
        
        $conexao=new PDO('mysql:host=127.0.0.1;dbname=cadastroserra',$usuario,$senha);
        $conexao -> setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING );

    }catch(PDOException $e){
        echo $e->getMessage();
    }
?>

