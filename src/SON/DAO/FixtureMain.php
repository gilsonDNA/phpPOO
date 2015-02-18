<?php
namespace SON\DAO;

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
$arrayClientes = array();

$arrayClientes[0] = array("Gilson Anselmo" , "Av Brasil 1200 São Paulo", "Av Brasil, 1200 São Paulo", "1", "017.232.231.23", "", "3");
$arrayClientes[1] = array("Mario Souza" , "Av jk 300 São Paulo", "", "1", "017.232.666.23", "", "2");
$arrayClientes[2] = array("Paulo Beto" , "Av Pedro Gomes, 20 São Paulo", "", "2", "", "632.3434.34-00", "3");
$arrayClientes[3] = array("Marcelo Araujo" , "Av California, 1200 São Paulo", "Av Brasil, 1200 São Paulo", "1", "017.232.231.23", "", "3");
$arrayClientes[4] = array("Sonia Maria" , "Av JK, 1200 São Paulo", "Av Brasil, 1200 São Paulo", "1", "017.232.231.23", "", "3");
$arrayClientes[5] = array("Solange Gomes" , "Av Oliva, 1200 São Paulo", "Av Oliva, 1200 São Paulo", "2", "", "378.3748.34-00", "3");
$arrayClientes[6] = array("Bia setel" , "Av Bolivia, 1200 São Paulo", "Av Brasil, 1200 São Paulo", "1", "017.232.231.23", "", "4");
$arrayClientes[7] = array("Pedro Novaes" , "Rua Souza jr , 1200 São Paulo", "Rua Souza jr , 1200 São Paulo", "2","", "878.9348.34-00", "3");
$arrayClientes[8] = array("Nelio Cesar" , "Av Brasil, 1200 São Paulo", "", "1", "017.232.231.23", "", "2");
$arrayClientes[9] = array("Humberto Beto" , "Av Brasil, 1200 São Paulo", "", "2", "", "989.0110.22-00", "1");

$objFixture->prepareInsertCliente($arrayClientes);
echo " ok\n";

echo "Database criada\n";


