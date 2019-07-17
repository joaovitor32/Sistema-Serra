<?php
class Acao{
    private $DataIni;
    private $DataFim;
    private $Atividades;
    private $Nome;
    private $Descricao;
    private $Data;

    //Gets
    public function getDataIni(){
        return $this->DataIni;
    }
    public function getDataFim(){
        return $this->DataFim;
    }
    public function getAtividades(){
        return $this->Atividades;
    }
    public function getNome(){
        return $this->Nome;
    }
    public function getDescricao(){
        return $this->Descricao;
    }
    public function getDataInicioAcao(){
        return $this->Data;
    }
    //Sets
    public function setDataIni($DataIni){
        $this->DataIni=$DataIni;
    }
    public function setDataFim($DataFim){
        $this->DataFim=$DataFim;
    }
    public function setAtividades($Atividades){
        $this->Atividades=$Atividades;
    }
    
}
?>