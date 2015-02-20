<?php
/**
 * Created by PhpStorm.
 * User: gilson
 * Date: 14/02/15
 * Time: 20:27
 */

namespace SON\DAO;

use SON\Cliente\Cliente;



class ClienteDAO
{
    private $db;


    function __construct(\PDO $db)
    {
        $this->db = $db;
        $this->db->beginTransaction();
    }

    function persist(Cliente $cliente)
    {

        try
        {
            $strSQL = "INSERT INTO tblcliente (nome,endereco, enderecoCobranca,tipoPessoa,cpf, cnpj,grauVIP) VALUES (:nome,:endereco, :enderecoCobranca,:tipoPessoa,:cpf, :cnpj,:grauVIP);";
            if($cliente->getId() != null  )
            {
                $strSQL = "UPDATE tblcliente set nome = :nome,endereco = :endereco, enderecoCobranca = :enderecoCobranca,tipoPessoa = :tipoPessoa ,cpf = :cpf, cnpj = :cnpj ,grauVIP = :grauVIP ";
            }


            $smtp = $this->db->prepare($strSQL);

            $smtp->bindParam(":nome", $cliente->getNome());
            $smtp->bindParam(":endereco", $cliente->getEndereco());
            $smtp->bindParam(":enderecoCobranca", $cliente->getEnderecoCobranca());
            $smtp->bindParam(":tipoPessoa", $cliente->returnTipoPessoa());

            $valor = "0";
            if($cliente->returnTipoPessoaId() == 1)
            {
                $smtp->bindParam(":cpf", $cliente->returnDoc());
                $smtp->bindParam(":cnpj", $valor);
            }else{
                $smtp->bindParam(":cpf", $valor);
                $smtp->bindParam(":cnpj", $cliente->returnDoc());
            }

            $smtp->bindParam(":grauVIP", $cliente->returnEstrelas());

            $smtp->execute();
        } catch (\PDOException $e) {
            $error = "Erro: " . $e->getMessage();
            $this->db->rollBack();
            die($error);
        }

    }

    function flush()
    {
        $this->db->commit();

    }

    function get($id)
    {
        $sql = "Select clie.*, tp.tipoPessoa FROM tblcliente clie
                inner join tbltipopessoa tp on (clie.tipoPessoa = tp.id) where clie.id = :clienteId ";

        $smtp = $this->db->prepare($sql);
        $smtp->bindParam(":clienteId", $id );
        $smtp->execute();

        $cliente = $smtp->fetchAll(PDO::FETCH_ASSOC);

        return $cliente;
    }


    function getList()
    {
        $sql = "Select clie.*, tp.tipoPessoa  FROM tblcliente clie
                inner join tbltipopessoa tp on (clie.tipoPessoa = tp.id) ";

        $smtp = $this->db->prepare($sql);



        $smtp->execute();

        $listClientes = $smtp->fetchAll(\PDO::FETCH_ASSOC);


        return $listClientes;


    }

} 