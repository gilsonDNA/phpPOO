<?php

namespace SON\DAO;

require_once  "/Users/gilson/PhpstormProjects/phpPOO/autoload.php";
require_once "ConexaoDB.php";
require_once "Fixture.php";




echo "Preparando Database\n";

$objFixture = new Fixture(ConexaoDB::getConexao());


echo "Deleting tables\n";
$objFixture->deleteTableCliente();
$objFixture->deleteTableTipoPessoa();
echo " ok\n";

echo "Criando tabela tblcliente\n";
$objFixture->createTableCliente();
echo " ok\n";

echo "Criando tabela tbltipopessoa\n";
$objFixture->createTableTipoPessoa();
echo " ok\n";


echo "Inserindo dados tabela tbltipopessoa\n";
$arrayContent = array("Física", "Jurídica");
$objFixture->prepareInsertTipoPessoa($arrayContent);
echo " ok\n";


echo "Inserindo dados tabela tblcliente\n";

$arrayClientes = $objFixture->createArrayObjetos();


$objFixture->prepareInsertCliente($arrayClientes);
echo " ok\n";

echo "Database criada\n";


