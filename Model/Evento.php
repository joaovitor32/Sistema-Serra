<?php
    class Evento{
        private $CodMembro;
        private $CodEvento;
        private $NomeEvento;
        private $Data;
        private $Descricao;

        //Gets
        public function getCodMembro(){
            return $this->CodMembro;
        }
        public function getCodEvento(){
            return $this->CodEvento;
        }
        public function getNomeEvento(){
            return $this->NomeEvento;
        }
        public function getData(){
            return $this->Data;
        }
        public function getDescricao(){
            return $this->Descricao;
        }
        //Sets
        public function setCodMembro($CodMembro){
            $this->CodMembro=$CodMembro;
        }
        public function setNomeEvento($NomeEvento){
            $this->NomeEvento=$NomeEvento;
        }
        public function setData($Data){
            $this->Data=$Data;
        }
        public function setDescricaoEvento($Descricao){
            $this->Descricao=$Descricao;
        }
        //Criação de um evento
        public function createEvento(){
            try{
                include 'Database.php';
                $sqlInsert="INSERT INTO EventosExternos(NomeEventos,DataEvento,Descricao) VALUES(?,?,?)";
                $conexao->beginTransaction();
                $stmtInsert=$conexao->prepare($sqlInsert);
                $stmtInsert->bindParam(1,$this->NomeEvento);
                $stmtInsert->bindParam(2,$this->Data);
                $stmtInsert->bindParam(3,$this->Descricao);
                $stmtInsert->execute();
                $conexao->commit();
            }catch(PDOException $e){
                $conexao->rollback();
                echo "Erro: ".$e->getMessage();
            }   
        }
        //Selecao de eventos dado um membro especifico
        public function selectEventosMembro(){
            try{
                include('Database.php');
                $sqlEventoMembro='SELECT * FROM EventosExternos AS Ev INNER JOIN MembroEvento AS Me ON Me.CodEvento=Ev.CodEvento WHERE Me.CodMembro=?';
                $stmtEventoMembro=$conexao->prepare($sqlEventoMembro);
                $stmtEventoMembro->bindParam(1,$this->CodMembro);
                $stmtEventoMembro->execute();

                $eventoMembro=$stmtEventoMembro->fetchALL(PDO::FETCH_ASSOC);
                return $eventoMembro;

            }catch(PDOException $e){
                echo "Erro: ".$e->getMessage();
            }
        }   
        //Retorna a selecao de eventos de determinado membro como um JSON
        public function listagemEventosMembroJSON(){
            return json_encode($this->selectEventosMembro());
        }
    }
?>