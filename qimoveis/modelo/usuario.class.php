<?php

    class Usuario
    {

        private $id;
        private $nome;
        private $email;
        private $telefone;
        private $tipoDeImovel;
        private $opcaoDeNegocio;
        private $valor;
        private $mensagem;


        public function __construct() {
         
        }


        public function __get($atributo)
        {
            return $this->$atributo;
        }

        public function __set($atributo, $valor)
        {
            $this->$atributo = $valor;
        }


        public function __toString()
        {
            return nl2br("Nome: $this->nome
                         Email: $this->email
                         Telefone: $this->telefone
                         Tipo de Imóvel: $this->tipoDeImovel
                         Opção de negócio: $this->opcaoDeNegocio
                         Valor Pretendido: $this->valor
                         Mensagem: $this->mensagem");
        }



        
    }



?>