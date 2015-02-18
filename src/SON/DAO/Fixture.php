<?php
/**
 * Created by PhpStorm.
 * User: gilson
 * Date: 14/02/15
 * Time: 18:25
 */

namespace SON\DAO;


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

    function prepareInsertCliente($arrayClientes)
    {


        foreach($arrayClientes as $array)
        {
            $smtp = $this->db->prepare("INSERT INTO tblcliente (nome,endereco, enderecoCobranca,tipoPessoa,cpf, cnpj,grauVIP) VALUES (:nome,:endereco, :enderecoCobranca,:tipoPessoa,:cpf, :cnpj,:grauVIP);");

            $smtp->bindParam(":nome", $array[0]);
            $smtp->bindParam(":endereco", $array[1]);
            $smtp->bindParam(":enderecoCobranca", $array[2]);
            $smtp->bindParam(":tipoPessoa", $array[3]);
            $smtp->bindParam(":cpf", $array[4]);
            $smtp->bindParam(":cnpj", $array[5]);
            $smtp->bindParam(":grauVIP", $array[6]);

            $smtp->execute();
        }

    }

} 