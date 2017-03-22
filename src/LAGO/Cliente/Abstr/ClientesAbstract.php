<?php

namespace LAGO\Cliente\Abstr;

abstract class ClientesAbstract {
    
    private $id;
    private $nome;
    private $idade;
    private $cpf;
    private $rg;
    private $tipo;
    private $importancia;
    
    public function __construct($id, $nome, $idade, $cpf, $rg, $tipo, $importancia)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cpf = $cpf;
        $this->rg = $rg;
        $this->tipo = $tipo;
        $this->importancia = $importancia;
    }

    /**
     * @return mixed
     */
    public function getImportancia()
    {
        return $this->importancia;
    }

    /**
     * @param mixed $importancia
     * @return Clientes
     */
    public function setImportancia($importancia)
    {
        $this->importancia = $importancia;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Clientes
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     * @return Clientes
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * @param mixed $idade
     * @return Clientes
     */
    public function setIdade($idade)
    {
        $this->idade = $idade;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     * @return Clientes
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRg()
    {
        return $this->rg;
    }

    /**
     * @param mixed $rg
     * @return Clientes
     */
    public function setRg($rg)
    {
        $this->rg = $rg;
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
     * @return Clientes
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
        return $this;
    }

}


