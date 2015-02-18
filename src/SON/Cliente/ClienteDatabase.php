<?php
/**
 * Created by PhpStorm.
 * User: gilson
 * Date: 05/02/15
 * Time: 20:06
 */

namespace SON\Cliente;

use SON\Cliente\Cliente;
use SON\Cliente\PessoaJuridica;
use SON\Cliente\PessoaFisica;
use SON\DAO\ClienteDAO;
use SON\DAO\ConexaoDB;

class ClienteDatabase {

    //metodo que cria um array de clientes, gerando dados fictícios para o mesmo
    public static function getListClientes()
    {
        try{
            $conn = ConexaoDB::getConexao();

        }catch (\Exception $e){
            echo "Erro ao conectar ao Banco ".$e->getMessage();
            die;
        }

        $clienteDAO = new ClienteDAO($conn);
        $arrayClientes = $clienteDAO->getList();



        return $arrayClientes;
    }


} 