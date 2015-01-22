<?php
    include "Cliente.php";

    //metodo que cria um array de clientes, gerando dados fictícios para o mesmo
    function getListClientes()
    {

        $arrayClientes = array();
        $arrayClientes[0] = new Cliente(1, "Gilson Anselmo", "017.232.231.23");
        $arrayClientes[1] = new Cliente(2, "Maria Aparecida", "017.444.631.23");
        $arrayClientes[2] = new Cliente(3, "Carlos Silva", "017.662.898.23");
        $arrayClientes[3] = new Cliente(4, "Wesley PHP", "017.232.231.23");
        $arrayClientes[4] = new Cliente(5, "Monica Belo", "221.123.231.23");
        $arrayClientes[5] = new Cliente(6, "Pedro Henrique", "111.232.231.23");
        $arrayClientes[6] = new Cliente(7, "Gabriel Araujo", "017.111.231.23");
        $arrayClientes[7] = new Cliente(8, "Flavia Cristina", "017.232.444.23");
        $arrayClientes[8] = new Cliente(9, "Victor Aguilar", "017.777.231.23");
        $arrayClientes[9] = new Cliente(10, "Humberto Gessinger", "888.232.231.23");

        return $arrayClientes;
    }

