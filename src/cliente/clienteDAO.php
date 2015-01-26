<?php
    include  "Cliente.php";
    include "PessoaFisica.php";
    include "PessoaJuridica.php";


    //metodo que cria um array de clientes, gerando dados fictícios para o mesmo
    function getListClientes()
    {

        $arrayClientes = array();
        $arrayClientes[0] = new Cliente(1, "Gilson Anselmo", new PessoaFisica("017.232.231.23"));
        $arrayClientes[1] = new Cliente(2, "Maria Aparecida", new PessoaJuridica("01.9182/0001.00"));
        $arrayClientes[2] = new Cliente(3, "Carlos Silva", new PessoaFisica("017.662.898.23"));
        $arrayClientes[3] = new Cliente(4, "Wesley PHP", new PessoaFisica("017.232.231.23"));
        $arrayClientes[4] = new Cliente(5, "Monica Belo", new PessoaJuridica("01.2324/0001.00"));
        $arrayClientes[5] = new Cliente(6, "Pedro Henrique", new PessoaFisica("111.232.231.23"));
        $arrayClientes[6] = new Cliente(7, "Gabriel Araujo", new PessoaJuridica("01.9744/0001.00"));
        $arrayClientes[7] = new Cliente(8, "Flavia Cristina", new PessoaFisica("017.232.444.23"));
        $arrayClientes[8] = new Cliente(9, "Victor Aguilar", new PessoaJuridica("01.6664/0001.00"));
        $arrayClientes[9] = new Cliente(10, "Humberto Gessinger", new PessoaJuridica("01.9224/0001.00"));

        return $arrayClientes;
    }

