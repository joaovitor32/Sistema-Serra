<?php
    class Projetos{
        private $codMembro;
        private $DataIni;
        private $DataFim;
        private $Nome;
        private $Preco;
        private $Descricao;
        private $Contratante;

        //Sets
        public function setCodMembro($codMembro){
            $this->codMembro=$codMembro;
        } 
        public function setDataIni($DataIni){
            $this->DataIni=$DataIni;
        }
        public function setDataFim($DataFim){
            $this->DataFim=$DataFim;
        }
        public function setNome($Nome){
            $this->Nome=$Nome;
        }
        public function setPreco($Preco){
            $this->Preco=$Preco;
        }
        public function setDescricao($Descricao){
            $this->Descricao=$Descricao;
        }
        public function setContratante($Contratante){
            $this->Contratante=$Contratante;
        }
        //Getes
        public function getCodMembro(){
            return $this->codMembro;      
        }
        public function getDataIni(){
            return $this->DataIni;
        }
        public function getDataFim(){
            return $this->DataFim;
        }
        public function getNome(){
            return $this->Nome;
        }
        public function getPreco(){
            return $this->Preco;
        }
        public function getDescricao(){
            return $this->Descricao;
        }
        public function getContratante(){
            return $this->Contratante;
        }
        //Criação de um projeto e alocação do mesmo no banco de dados
        public function createProjeto(){
            try{
                include "Database.php";
                $sqlInsert="INSERT INTO Projeto(Nome,DataIni,DataFim,Preco,Descricao,Contratante) VALUES (?,?,?,?,?,?)";
                $conexao->beginTransaction();
                $stmtInsert=$conexao->prepare($sqlInsert);
                $stmtInsert->bindParam(1,$this->Nome);
                $stmtInsert->bindParam(2,$this->DataIni);
                $stmtInsert->bindParam(3,$this->DataFim);
                $stmtInsert->bindParam(4,$this->Preco);
                $stmtInsert->bindParam(5,$this->Descricao);
                $stmtInsert->bindParam(6,$this->Contratante);
                $stmtInsert->execute();
                $conexao->commit();
            }catch(PDOException $e){
                $conexao->rollback();
                echo "Erro: ".$e->getMessage();
            }
        }
        //Selecao dos projetos de um membro especifico
        public function selectProjetosMembro(){
            try{
                include('Database.php');
                $sqlProjetosMembro="SELECT * FROM Projeto AS PO INNER JOIN ProjetoMembro AS PM ON PM.CodProjeto=PO.CodProjeto WHERE PM.CodMembro=?";
                $stmtProjetosMembro=$conexao->prepare($sqlProjetosMembro);
                $stmtProjetosMembro->bindParam(1,$this->codMembro);
                $stmtProjetosMembro->execute();
                
                $projetosMembro=$stmtProjetosMembro->fetchALL(PDO::FETCH_ASSOC);
                return $projetosMembro;
            }catch(PDOException $e){
                echo "Erro: ".$e->getMessage();
            }
        }
        //Retorna a selecao dos projetos de um membro como um JSON
        public function listagemProjetosMembroJSON(){
            return json_encode($this->selectProjetosMembro());
        }
    }
?>