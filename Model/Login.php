<?php
    class Login{
        private $Login;
        private $Senha;

        //Gets
        public function getLogin(){
            return $this->Login;
        }
        public function getSenha(){
            return $this->Senha;
        }
        //Sets
        public function setLogin($Log){
            $this->Login=$Log;
        }
        public function setSenha($password){
            $this->Senha=$password;
        }
        public function grantAcess(){
            try{
                include("Database.php");
                $sqLogin='SELECT * FROM Login1 WHERE Login1 = ? AND Senha = ?';
                $stmtAcesso=$conexao->prepare($sqLogin);
                $stmtAcesso->bindParam(1,$this->Login);
                $stmtAcesso->bindParam(2,$this->Senha);
                $stmtAcesso->execute();
                $dado=$stmtAcesso->fetchAll(PDO::FETCH_ASSOC);
                if(count($dado)>0){
                    echo true;
                }
            }catch(PDOException $e){
                echo "Erro: ".$e->getMessage();
            }
        }
    }
?>