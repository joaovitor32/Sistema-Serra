<?php
    class Projetos{
        private $codMembro;
        private $DataIni;
        private $DataFim;
        private $Nome;
        private $Preco;
        private $Descricao;

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
            $this->$Descricao=$Descricao;
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