<?php
    class conexaoMySQL
    {
        public $servidor;
        public $usuario;
        public $senha;
        public $banco;
        public $conexao;


        function conectar()
        {
            $this->conexao = @mysql_connect($this->servidor,$this->usuario,$this->senha) or
                die("Não foi possivel conectar com o servidor de Banco de Dados");

            $this->banco =@mysql_select_db($this->banco) or  
                            die ("Não foi possivel conectar com o Banco de Dados");
        }

    }

?>