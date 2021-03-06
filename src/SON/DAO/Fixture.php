<?php


namespace SON\DAO;


use SON\CLI\Cliente;
use SON\CLI\PessoaFisica;
use SON\CLI\PessoaJuridica;

class Fixture
{

    private $db;

    function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    function deleteTableCliente()
    {
        $this->db->query("DROP TABLE IF EXISTS tblcliente ;");
    }

    function deleteTableTipoPessoa()
    {
        $this->db->query("DROP TABLE IF EXISTS tbltipopessoa ;");

    }


    function createTableCliente()
    {

        $strQuery = " CREATE TABLE tblcliente (
            id INT NOT NULL AUTO_INCREMENT,
            nome VARCHAR(255) CHARACTER SET 'utf8' NULL,
            endereco VARCHAR(255) CHARACTER SET 'utf8' NULL,
            enderecoCobranca VARCHAR(255) CHARACTER SET 'utf8' NULL,
            tipoPessoa INT NOT NULL,
            cpf  VARCHAR(255) CHARACTER SET 'utf8' NULL,
            cnpj VARCHAR(255) CHARACTER SET 'utf8' NULL,
            grauVIP INT,
            PRIMARY KEY (id)) ";

        $this->db->query($strQuery);

    }

    function createTableTipoPessoa()
    {

        $strQuery = " CREATE TABLE tbltipopessoa (
            id INT NOT NULL AUTO_INCREMENT,
            tipoPessoa VARCHAR(255) CHARACTER SET 'utf8' NULL,
            PRIMARY KEY (id)) ";

        $this->db->query($strQuery);

    }

    function prepareInsertTipoPessoa($arrayContent)
    {

        foreach ($arrayContent as $tipoPessoa) {
            $smtp = $this->db->prepare("INSERT INTO tbltipopessoa (tipopessoa) VALUES (:tipo);");
            $smtp->bindParam(":tipo", $tipoPessoa);
            $smtp->execute();
        }

    }

    public function prepareInsertCliente($arrayClientes)
    {

        $clienteDAO = new ClienteDAO($this->db);

        foreach ($arrayClientes as $cliente) {

            $clienteDAO->persist($cliente);
            //var_dump($cliente->getNome() );
        }

        //var_dump("Antes do Flush" );
        $clienteDAO->flush();
        //var_dump("Apos do Flush" );

    }

    public function createArrayObjetos()
    {
        $arrayClientes = array();


        $objCliente1 = new Cliente("Gilson Anselmo", "Av Brasil 1200 São Paulo", new PessoaFisica("017.232.231.23"));
        $objCliente1->setEnderecoCobranca("Av Brasil 1200 São Paulo");
        $objCliente1->getTipoPessoa()->setGrau("3");

        $arrayClientes[0] = $objCliente1;

        $objCliente2 = new Cliente("Marcos Camargo", "Av JK 1200 São Paulo", new PessoaFisica("017.232.231.23"));
        $objCliente2->setEnderecoCobranca("Av JK 1200 São Paulo");
        $objCliente2->getTipoPessoa()->setGrau("2");

        $arrayClientes[1] = $objCliente2;

        $objCliente3 = new Cliente("Valter Souza LTDA", "Av Jardins 333 São Paulo", new PessoaJuridica("0384.098/0001-99"));
        $objCliente3->setEnderecoCobranca("Av Jardins 333 São Paulo");
        $objCliente3->getTipoPessoa()->setGrau("5");

        $arrayClientes[2] = $objCliente3;


        $objCliente4 = new Cliente("Maria Aparecida", "Rua São Pedro, 23, Sumaré", new PessoaFisica("017.232.231.23"));
        $objCliente4->setEnderecoCobranca("Rua São Pedro, 23, Sumaré");
        $objCliente4->getTipoPessoa()->setGrau("1");

        $arrayClientes[3] = $objCliente4;

        $objCliente5 = new Cliente("Carlos Carvalho", "Av Brasil 10 São Paulo", new PessoaJuridica("2334.098/0001-01"));
        $objCliente5->setEnderecoCobranca("Av Brasil 10 São Paulo");
        $objCliente5->getTipoPessoa()->setGrau("4");

        $arrayClientes[4] = $objCliente5;

        $objCliente6 = new Cliente("Monica Souza", "Av Brasil 300 São Paulo", new PessoaFisica("017.232.231.23"));
        $objCliente6->setEnderecoCobranca("Av Brasil 300 São Paulo");
        $objCliente6->getTipoPessoa()->setGrau("2");

        $arrayClientes[5] = $objCliente6;

        $objCliente7 = new Cliente("Simone Aparecida", "Av JK 55 São Paulo", new PessoaFisica("342.666.111.89"));
        $objCliente7->setEnderecoCobranca("Av JK 55 São Paulo");
        $objCliente7->getTipoPessoa()->setGrau("5");

        $arrayClientes[6] = $objCliente7;

        $objCliente8 = new Cliente("Paula Araujo", "Rua Andradina, 35, Santos", new PessoaJuridica("5554.456/0001-01"));
        $objCliente8->setEnderecoCobranca("Rua Andradina, 35, Santos");
        $objCliente8->getTipoPessoa()->setGrau("3");

        $arrayClientes[7] = $objCliente8;

        $objCliente9 = new Cliente("Jonas Torres", "Rua Brasilia, 238", new PessoaFisica("087.223.443.23"));
        $objCliente9->setEnderecoCobranca("Rua Brasilia, 238");
        $objCliente9->getTipoPessoa()->setGrau("4");

        $arrayClientes[8] = $objCliente9;

        return $arrayClientes;
    }

} 