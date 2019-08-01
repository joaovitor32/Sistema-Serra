<?php
    include "../Model/Ligacao.php";
    $ligacao=new Ligacao();
    return $ligacao->listaLigacaoJson();
?>