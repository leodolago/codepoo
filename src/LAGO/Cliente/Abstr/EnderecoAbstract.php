<?php

namespace LAGO\Cliente\Abstr;

    abstract class EnderecoAbstract
    {
        private $id_cliente;
        private $tipo;
        private $endereco;
        private $telefone;
        private $email;

        public function __construct($id_cliente, $tipo, $endereco, $telefone, $email)
        {
            $this->id_cliente = $id_cliente;
            $this->tipo = $tipo;
            $this->endereco = $endereco;
            $this->telefone = $telefone;
            $this->email = $email;
        }

        /**
         * @return mixed
         */
        public function getIdCliente()
        {
            return $this->id_cliente;
        }

        /**
         * @param mixed $id_cliente
         * @return Endereço
         */
        public function setIdCliente($id_cliente)
        {
            $this->id_cliente = $id_cliente;
            return $this;
        }

        /**
         * @return mixed
         */
        public function getTipo()
        {
            return $this->tipo;
        }

        /**
         * @param mixed $tipo
         * @return Endereço
         */
        public function setTipo($tipo)
        {
            $this->tipo = $tipo;
            return $this;
        }

        /**
         * @return mixed
         */
        public function getEndereco()
        {
            return $this->endereco;
        }

        /**
         * @param mixed $endereco
         * @return Endereço
         */
        public function setEndereco($endereco)
        {
            $this->endereco = $endereco;
            return $this;
        }

        /**
         * @return mixed
         */
        public function getTelefone()
        {
            return $this->telefone;
        }

        /**
         * @param mixed $telefone
         * @return Endereço
         */
        public function setTelefone($telefone)
        {
            $this->telefone = $telefone;
            return $this;
        }

        /**
         * @return mixed
         */
        public function getEmail()
        {
            return $this->email;
        }

        /**
         * @param mixed $email
         * @return Endereço
         */
        public function setEmail($email)
        {
            $this->email = $email;
            return $this;
        }
}