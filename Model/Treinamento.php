<?php
    class Treinamento{
        private $CodMembro;
        private $CodTreinamento;
        private $DuracaoDias;
        private $HorasTotais;
        private $TipoTreinamento;

        //Gets
        public function getCodTreinamento(){
            return $this->CodTreinamento;
        }
        public function getDuracaoDias(){
            return $this->DuracaoDias;
        }
        public function getHorasTotais(){
            return $this->HorasTotais;
        }
        public function getTipoTreinamento(){
            return $this->TipoTreinamento; 
        }
        //Sets
        public function setCodMembro($CodMembro){
            $this->CodMembro=$CodMembro;
        }
        public function setDuracaoDias($DuracaoDias){
            $this->DuracaoDias=$DuracaoDias;
        }
        public function setHorasTotais($HorasTotais){
            $this->HorasTotais=$HorasTotais;
        }
        public function setTipoTreinamento(){
            $this->TipoTreinamento=$TipoTreinamento;
        }
        //Selecao dos treinamentos de um membro especifico
        public function selectTreinamentosMembro(){
            try{
                include('Database.php');
                $sqlTreinamentoMembro="SELECT * FROM Treinamento AS Tr INNER JOIN MembroTreinamento AS Mt ON Mt.CodTreinamento=Tr.CodTreinamento WHERE Mt.CodMembro=?";
                $stmtTreinamentoMembro=$conexao->prepare($sqlTreinamentoMembro);
                $stmtTreinamentoMembro->bindParam(1,$this->CodMembro);
                $stmtTreinamentoMembro->execute();

                $treinamentosMembro=$stmtTreinamentoMembro->fetchALL(PDO::FETCH_ASSOC);
                return $treinamentosMembro;
            }catch(PDOException $e){
                echo "Erro: ".$e->getMessage();
            }
        }
        //Retorna a selecao dos treinamentos de um membro como um JSON
        public function listagemTreinamentosMembroJSON(){
            return json_encode($this->selectTreinamentosMembro());
        } 
    }
?>