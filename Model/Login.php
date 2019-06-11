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
            $login=$this->Login;
            $senha=md5($this->Senha);
            $sqLogin="SELECT * FROM Login1 = ? AND Senha = ?";
            $stmtAcesso=$conexao->prepare($sqLogin);
            $stmtAcesso->bindParam(1,$login);
            $stmtAcesso->bindParam(2,$senha);
            $stmtAcesso->execute();
        }
    }
?>