<?php
    class Ligacao{ 
        private $data;
        private $descricao;
        private $telefone;
        private $nomeAtendente;
        private $nomeEmpresa;
        private $ramo;

        //Gets
        public function getData(){
            return $this->data;
        }
        public function getDescricao(){
            return $this->descricao;
        }
        public function getTelefone(){
            return $this->telefone;
        }
        public function getNomeAtendente(){
            return $this->nomeAtendente;
        }
        public function getNomeEmpresa(){
            return $this->nomeEmpresa;
        }
        public function getRamo(){
            return $this->ramo;
        }
        //Sets
        public function setData($data){
            $this->data=$data;
        }
        public function setDescricao($descricao){
            $this->descricao=$descricao;
        }
        public function setTelefone($telefone){
            $this->telefone=$telefone;
        }
        public function setNomeAtendente($nomeAtendente){
            $this->nomeAtendente=$nomeAtendente;
        }
        public function setNomeEmpresa($nomeEmpresa){
            $this->nomeEmpresa=$nomeEmpresa;
        }
        public function setRamo($ramo){
            $this->ramo=$ramo;
        }
        //Inserção de uma nova ligação
        public function createLigacao(){
            try{
                include "Database.php";
                $sqlInsert="INSERT INTO Ligacao (dataLigacao,descricao,telefone,nomeAtendente,nomeEmpresa,ramo) VALUES (?,?,?,?,?,?)";
                $conexao->beginTransaction();
                $stmtInsert=$conexao->prepare($sqlInsert);
                $stmtInsert->bindParam(1,$this->data);
                $stmtInsert->bindParam(2,$this->descricao);
                $stmtInsert->bindParam(3,$this->telefone);
                $stmtInsert->bindParam(4,$this->nomeAtendente);
                $stmtInsert->bindParam(5,$this->nomeEmpresa);
                $stmtInsert->bindParam(6,$this->ramo);
                $stmtInsert->execute();
                $conexao->commit();
            }catch(PDOException $e){
                $conexao->rollBack();
                echo "Erro: ".$e->getMessage();
            }
        }
        public function listagemLigacoes(){
            try{

                include "Database.php";
                $sqlLista='SELECT * FROM Ligacao';
                $stmtLista=$conexao->prepare($sqlLista);
                $stmtLista->execute();
                $ligacoes=$stmtLista->fetchALL(PDO::FETCH_ASSOC);
                return $ligacoes;

            }catch(PDOException $e){
                echo "Erro: ".$e->getMessage();
            }
        }
        public function listaLigacaoJson(){
            echo json_encode($this->listagemLigacoes());
        }
    }
?>