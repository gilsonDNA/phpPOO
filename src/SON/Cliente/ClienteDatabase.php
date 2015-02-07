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

class ClienteDatabase {

    //metodo que cria um array de clientes, gerando dados fictícios para o mesmo
    public static function getListClientes()
    {

        $arrayClientes = array();


        $cliente1 = new Cliente(1, "Gilson Anselmo" , "Av Brasil, 1200 São Paulo", new PessoaFisica("017.232.231.23"));
        $cliente1->getTipoPessoa()->setGrau(3);
        $cliente1->getTipoPessoa()->setEnderecoCobranca("Av Brasil, 1200 São Paulo");

        $arrayClientes[0] = $cliente1;

        $cliente2 = new Cliente(2, "Maria Aparecida" , "Av JK, 100 São Paulo", new PessoaJuridica("01.9182/0001.00"));
        $cliente2->getTipoPessoa()->setGrau(2);
        $cliente2->getTipoPessoa()->setEnderecoCobranca("Av JK, 100 São Paulo");
        $arrayClientes[1] = $cliente2;

        $cliente3 = new Cliente(3, "Carlos Silva" , "Av Brasil, 200 São Paulo",  new PessoaFisica("017.662.898.23"));
        $cliente3->getTipoPessoa()->setGrau(5);
        $cliente3->getTipoPessoa()->setEnderecoCobranca("Av Brasil, 1200 São Paulo");
        $arrayClientes[2] = $cliente3;

        $cliente4 = new Cliente(4, "Wesley PHP" , "Av Santos Silva, 10 São Paulo", new PessoaFisica("017.232.231.23"));
        $cliente4->getTipoPessoa()->setGrau(5);
        $cliente4->getTipoPessoa()->setEnderecoCobranca("Av Brasil, 1200 São Paulo");
        $arrayClientes[3] = $cliente4;

        $cliente5 = new Cliente(5, "Monica Belo" , "Av Sao Pedro, 1200 São Paulo", new PessoaJuridica("01.2324/0001.00"));
        $cliente5->getTipoPessoa()->setGrau(5);
        $cliente5->getTipoPessoa()->setEnderecoCobranca("Av Brasil, 1200 São Paulo");
        $arrayClientes[4] = $cliente5;

        $cliente6 = new Cliente(6, "Pedro Henrique" , "Av Paraná, 239 São Paulo", new PessoaFisica("111.232.231.23"));
        $cliente6->getTipoPessoa()->setGrau(5);
        $cliente6->getTipoPessoa()->setEnderecoCobranca("Av Brasil, 1200 São Paulo");
        $arrayClientes[5] = $cliente6;

        $cliente7 =  new Cliente(7, "Gabriel Araujo" ,  "Av_Goias, 1200 São Paulo", new PessoaJuridica("01.9744/0001.00"));
        $cliente7->getTipoPessoa()->setGrau(5);
        $cliente7->getTipoPessoa()->setEnderecoCobranca("Av Brasil, 1200 São Paulo");
        $arrayClientes[6] = $cliente7;

        $cliente8 = new Cliente(8, "Flavia Cristina" , "Av Monte Carlo, 340 São Paulo", new PessoaFisica("017.232.444.23"));
        $cliente8->getTipoPessoa()->setGrau(3);
        $cliente8->getTipoPessoa()->setEnderecoCobranca("Av Brasil, 1200 São Paulo");
        $arrayClientes[7] = $cliente8;

        $cliente9 =  new Cliente(9, "Victor Aguilar" , "Av Foz, 300 São Paulo", new PessoaJuridica("01.6664/0001.00"));
        $cliente9->getTipoPessoa()->setGrau(3);
        $cliente9->getTipoPessoa()->setEnderecoCobranca("Av Brasil, 1200 São Paulo");
        $arrayClientes[8] = $cliente9;

        $cliente10  = new Cliente(10, "Humberto Gessinger" , "Av Brasil, 899 São Paulo", new PessoaJuridica("01.9224/0001.00"));
        $cliente10->getTipoPessoa()->setGrau(5);
        $cliente10->getTipoPessoa()->setEnderecoCobranca("Av Brasil, 1200 São Paulo");
        $arrayClientes[9] = $cliente10;

        return $arrayClientes;
    }


} 