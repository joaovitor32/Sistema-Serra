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
        public function setLogin($Login){
            $this->Login=$Login;
        }
        public function setSenha($Login){
            $this->Login=$Login;
        }
        public function grantAcess(){
            try{
                include("Database.php");
                $login=$this->Login;
                $senha=md5($this->Senha);
                $sqLogin="SELECT * FROM Login1 WHERE Login1 = ? AND Senha = ?";
                $stmtAcesso=$conexao->prepare($sqLogin);
                $stmtAcesso->bindParam(1,$login);
                $stmtAcesso->bindParam(2,$senha);
                $count=$stmtAcesso->execute();
                if($stmtAcesso->columnCount() ==1){   
                    return true;
                }else{
                    return false;
                }
            }catch(PDOException $e){
                echo "Erro: ".$e->getMessage();
                return false;
            }
        }
    }
?>