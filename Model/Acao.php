<?php
class Acao{
    private $CodMembro;
    private $DataIni;
    private $DataFim;
    private $Atividades;
    private $Nome;
    private $Descricao;
    private $Data;

    //Gets
    public function getCodMembro(){
        return $this->CodMembro;
    }
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
    public function setCodMembro($CodMembro){
        $this->CodMembro=$CodMembro;
    }
    public function setDataIni($DataIni){
        $this->DataIni=$DataIni;
    }
    public function setDataFim($DataFim){
        $this->DataFim=$DataFim;
    }
    public function setAtividades($Atividades){
        $this->Atividades=$Atividades;
    }
    public function setNome($Nome){
        $this->Nome=$Nome;
    }
    public function setDescricao($Descricao){
        $this->Descricao=$Descricao;
    }
    public function setDataInicioAcao($Data){
        $this->Data=$Data;
    }
    //Create Acao
    public function createAcao(){
        try{
            include 'Database.php';
            $sqlInsert="INSERT INTO Acao(Nome,Descricao,'Data') VALUES (?,?,?)";
            $conexao->beginTransaction();
            $stmtInsert=$conexao->prepare($sqlInsert);
            $stmtInsert->bindParam(1,$this->Nome);
            $stmtInsert->bindParam(2,$this->Descricao);
            $stmtInsert->bindParam(3,$this->Data);
            $stmtInsert->execute();
            $conexao->commit();
        }catch(PDOException $e){
            $e->rollback();
            echo "Erro: ".$e->getMessage();
        }
    }
    //Listagem de acao de determinado membro
    public function listagemAcaoMembro(){
        try{
            include('Database.php');
            $sqlAcaoMembro='SELECT * FROM  Acao AS Ac INNER JOIN AcaoMembro AS Am ON Am.CodAcao=Ac.CodAcao WHERE Am.CodMembro=?';
            $stmtAcaoMembro=$conexao->prepare($sqlAcaoMembro);
            $stmtAcaoMembro->bindParam(1,$this->CodMembro);
            $stmtAcaoMembro->execute();

            $acaoMembro=$stmtAcaoMembro->fetchALL(PDO::FETCH_ASSOC);
            return $acaoMembro;

        }catch(PDOException $e){
            echo "Erro: ".$e->getMessage();
        }
    }
    //Listagem de acao de determinado membro no formado JSON
    public function listagemAcaoMembroJSON(){
        return json_encode($this->listagemAcaoMembro());
    }
}
?>