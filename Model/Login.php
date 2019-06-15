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
                $login=$this->getLogin();
                $senha=$this->getSenha();
                $sqLogin='SELECT * FROM Login1 WHERE Login1 = :login1 AND Senha = :senha';
                $stmtAcesso=$conexao->prepare($sqLogin);
                $stmtAcesso->bindParam(':login1',$login);
                $stmtAcesso->bindParam(':senha',$senha);
                $stmtAcesso->execute();
                $dado=$stmtAcesso->fetchAll(PDO::FETCH_ASSOC);
                if(count($dado)>0){
                    echo true;
                }else{
                    echo false;
                }
            }catch(PDOException $e){
                echo "Erro: ".$e->getMessage();
            }
        }
    }
?>