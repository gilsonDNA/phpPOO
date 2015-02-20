<?php


namespace SON\DAO;

use SON\Cliente\Cliente;
use SON\Cliente\PessoaFisica;
use SON\Cliente\PessoaJuridica;


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

        foreach($arrayContent as $tipoPessoa)
        {
            $smtp = $this->db->prepare("INSERT INTO tbltipopessoa (tipopessoa) VALUES (:tipo);");
            $smtp->bindParam(":tipo", $tipoPessoa);
            $smtp->execute();
        }

    }

    public function prepareInsertCliente($arrayClientes)
    {

        $clienteDAO = new ClienteDAO($this->db);

        foreach($arrayClientes as $cliente)
        {
            $clienteDAO->persist($cliente);
        }

        $clienteDAO->flush();

    }

} 