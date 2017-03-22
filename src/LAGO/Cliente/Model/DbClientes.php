<?php

namespace LAGO\Cliente\Model;

use LAGO\Cliente\Clientes;
use LAGO\Cliente\Endereco;

class DbClientes{

    private function data()
    {
        return $pessoas = [
            0 => new Clientes (1, "João", 25, 54321, 12345, "Física", 2),
            1 => new Clientes (2, "Paulo", 32, 54321, 12345, "Física", 4),
            2 => new Clientes (3, "Marta", 55, 54321, 12345, "Física", 2),
            3 => new Clientes (4, "MRC", 65, 54321, 12345, "Jurídica", 3),
            4 => new Clientes (5, "Pedro", 35, 54321, 12345, "Física", 2),
            5 => new Clientes (6, "Jla", 54, 54321, 12345, "Jurídica", 1),
            6 => new Clientes (7, "Talita", 39, 54321, 12345, "Física", 3),
            7 => new Clientes (8, "Assis", 40, 54321, 12345, "Física", 5),
            8 => new Clientes (9, "Eder", 31, 54321, 12345, "Jurídica", 5),
            9 => new Clientes (10, "Rosana", 29, 54321, 12345, "Física", 4),
        ];
    }

    private function dataEndereco()
    {
        return $enderecos = [

            0 => new Endereco(1, "principal", "Rua do cliente 1", 99999 - 9999, "joão@pessoa.com"),
            1 => new Endereco(2, "principal", "Rua do cliente 2", 99999 - 9999, "paulo@pessoa.com"),
            2 => new Endereco(3, "principal", "Rua do cliente 3", 99999 - 9999, "marta@pessoa.com"),
            3 => new Endereco(4, "principal", "Rua do cliente 4", 99999 - 9999, "mrc@pessoa.com"),
            4 => new Endereco(5, "principal", "Rua do cliente 5", 99999 - 9999, "pedro@pessoa.com"),
            5 => new Endereco(6, "principal", "Rua do cliente 6", 99999 - 9999, "jla@pessoa.com"),
            6 => new Endereco(7, "principal", "Rua do cliente 7", 99999 - 9999, "talita@pessoa.com"),
            7 => new Endereco(8, "principal", "Rua do cliente 8", 99999 - 9999, "assis@pessoa.com"),
            8 => new Endereco(9, "principal", "Rua do cliente 9", 99999 - 9999, "edr@pessoa.com"),
            9 => new Endereco(10, "principal", "Rua do cliente 10", 99999 - 9999, "rosana@pessoa.com"),
            10 => new Endereco(3, "cobrança", "Rua do cliente 3 cobrança", 99999 - 9999, "marta@cobranca.com"),
            11 => new Endereco(4, "cobrança", "Rua do cliente 4 cobrança", 99999 - 9999, "MRC@cobranca.com"),
            12 => new Endereco(6, "cobrança", "Rua do cliente 6 cobrança", 99999 - 9999, "jla@cobranca.com"),
            13 => new Endereco(9, "cobrança", "Rua do cliente 9 cobrança", 99999 - 9999, "edr@cobranca.com"),

        ];
    }

    public function getCliente($id)
    {
        foreach($this->data() as $cliente) {
            if ($cliente->getId() == $id) {
                return $cliente;
            }
        }

       return 'ERRO: cliente não encontrado';
    }

    public function getClientes() {
        if ($this->data() > 0) {
            return $this->data();
        }

        return 'ERRO: nehum registro encontrado!';
    }

    public function getEnderecos() {
        if ($this->dataEndereco() > 0) {
            return $this->dataEndereco();
        }

        return 'ERRO: nehum registro encontrado!';
    }

    public function ordClientes($ord = "0"){
        $clientes = $this->data();
        if ($ord == "1"){
            krsort($clientes);
            return ($clientes);
        }
        ksort($teste);
        return ($clientes);
    }

}

?>