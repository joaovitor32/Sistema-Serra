<?php
    class Membro{
        private $CodMembro;
        private $Nome;
        private $Curso;
        private $AnoEntrada;
        private $Cargo;
        private $Telefone;
        private $CPF;
        private $Rua;
        private $Numero;
        private $Email;
        private $Bairro;
        private $DataNas;
        private $Status;

        //Getes 
        public function getNome(){
            return $this->Nome;
        }  
        public function getCurso(){
            return $this->Curso;
        }
        public function getAnoEntrada(){
            return $this->AnoEntrada;            
        }
        public function getCargo(){
            return $this->Cargo;
        }
        public function getTelefone(){
            return $this->Telegone;
        }
        public function getCPF(){
            return $this->CPF;
        }
        public function getRua(){
            return $this->Rua;
        }
        public function getNumero(){
            return $this->Numero;
        }
        public function getEmail(){
            return $this->Email;
        }
        public function getBairro(){
            return $this->Bairro;
        }
        public function getDataNas(){
            return $this->DataNas;
        }
        public function getStatus(){
            return $this->Status;
        }
        //Settes
        public function setNome($Nome){
            $this->Nome=$Nome;
        }  
        public function setCurso($Curso){
            $this->Curso=$Curso;
        }
        public function setAnoEntrada($AnoEntrada){
            $this->AnoEntrada=$AnoEntrada;            
        }
        public function setCargo($Cargo){
            $this->Cargo=$Cargo;
        }
        public function setTelefone($Telefone){
            $this->Telefone=$Telefone;
        }
        public function setCPF($CPF){
            $this->CPF=$CPF;
        }
        public function setRua($Rua){
            $this->Rua=$Rua;
        }
        public function setNumero($Numero){
            $this->Numero=$Numero;
        }
        public function setEmail($Email){
            $this->Email=$Email;
        }
        public function setBairro($Bairro){
            $this->Bairro=$Bairro;
        }
        public function setDataNas($DataNas){
            $this->DataNas=$DataNas;
        }
        public function setStatus($Status){
            $this->Status=$Status;
        }
        //CRUD
        public function createMembro(){
            try{
                include 'Database.php';
                $sqlInsert='INSERT INTO Membros(Nome,Curso,AnoDeEntrada,Cargo,Telefone,CPF,NomeRua,Numero,Email,DataNascimento,Bairro,Estado) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)';
                $conexao->beginTransaction();
                $stmtInsert=$conexao->prepare($sqlInsert);
                $stmtInsert->bindParam(1,$this->Nome);
                $stmtInsert->bindParam(2,$this->Curso);
                $stmtInsert->bindParam(3,$this->AnoEntrada);
                $stmtInsert->bindParam(4,$this->Cargo);
                $stmtInsert->bindParam(5,$this->Telefone);
                $stmtInsert->bindParam(6,$this->CPF);
                $stmtInsert->bindParam(7,$this->Rua);
                $stmtInsert->bindParam(8,$this->Numero);
                $stmtInsert->bindParam(9,$this->Email);
                $stmtInsert->bindParam(10,$this->DataNas);
                $stmtInsert->bindParam(11,$this->Bairro);
                $stmtInsert->bindParam(12,$this->Status); 
                $stmtInsert->execute();
                $conexao->commit();
            }catch(PDOException $e){
                $conexao->rollback();
                echo 'Erro:'.$e->getMessage();
            }
        }
        public function readMembro(){
            try{

                include('Database.php');
                $sqlMembro='SELECT * FROM Membros WHERE CodMembro=?';
                $stmtMembro=$conexao->prepare($sqlMembro);
                $stmtMembro->bindParam(1,$this->CodMembro);

                //Dado['Nome'];
                $dado=$stmtMembro->fetch(PDO::FETCH_ASSOC);

            }catch(PDOException $e){
                echo 'Erro:'.$e->getMessage();
            }
        }
        public function deleteMembro(){
            try{
            
                include 'Database.php';
                $sqlDelete='DELETE FROM Membros WHERE CodMembro=?';
                $stmtDelete=$conexao->prepare($sqlDelete);
                $stmtDelete->bindParam(1,$this->matricula);
                $stmtDelete->execute();

            }catch(PDOException $e){
                echo "Erro: ".$e->getMessage();
            }
        }
        public function listagemMembros(){
            try{
                include('Database.php');
                $sqlLista='SELECT * FROM Membros';
                $stmtLista=$conexao->prepare($sqlLista);
                $stmtLista->execute();

                $membros=$stmtLista->fetchALL(PDO::FETCH_ASSOC);
                return $membros;

            }catch(PDOException $e){
                echo 'Erro: '.$e->getMessage();
            }
        }
        public function listaMembrosJson(){
                return json_encode($this->listagemMembros());
        }
        //Ultimo id inserido
        public function lastId(){
            try{
                include('Database.php');
                $sqlLista='SELECT CodMembro FROM Membros WHERE CodMembro=(SELECT MAX(CodMembro) FROM Membros)';
                $stmtLista=$conexao->prepare($sqlLista);
                $stmtLista->execute();
                $dado=$stmtLista->fetch(PDO::FETCH_ASSOC);
                return $dado['CodMembro'];
            }catch(PDOException $e){
                echo 'Erro: '.$e->getMessage();
            }
        }
        //Alocação de foto do membro na pasta 
        public function cadastroDeFoto($Foto){
            try{
                if($Foto['error']==0){
                    $arquivo_tmp=$Foto['tmp_name'];
                    $nome=$Foto['name'];
                    $extensao=pathinfo($nome,PATHINFO_EXTENSION);
                    $extensao=strtolower($extensao);
                    if(strstr('.jpg;.jpeg;.gif;.png',$extensao)){
                        $novoNome=$this->lastId();
                        $destino='../View/FotoMembro/'.$novoNome.'.jpg';
                        @move_uploaded_file($arquivo_tmp,$destino);
                    }
                }
            }catch(PDOException $e){
                echo 'Erro: '.$e->getMessage();
            }
        }
    }
?>