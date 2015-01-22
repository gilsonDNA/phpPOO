<!-- ESTE ARQUIVO LISTA TODOS OS CLIENTES DO ARRAY -->
<?php
    include_once("./pages/layout/header_padrao.php");
    include __DIR__ . "/admin/cliente/clienteDAO.php";
    include_once("./pages/layout/menu.php");
?>


<div class="span10">


    <form class="form-horizontal" action="listClientes.php" role="form" method="post" >
    <div class="well">
        <h1> Clientes Cadastrados </h1>
        <hr />


        <?php
            $tipoOrdenacao = $_GET['ordem'];
        ?>


        <!-- MONTANDO A TABELA -->
        <table class="table table-striped">
            <tr>

                <?php if($tipoOrdenacao == 1): ?>
                    <td><b><a href="listClientes.php?ordem=2" title="Clique para ordernar">Id (ordem decrescente) </a></b></td>
                <?php else: ?>
                    <td><b><a href="listClientes.php?ordem=1" title="Clique para ordernar">Id (ordem crescente) </a></b></td>
                <?php endif; ?>
                <td><b>Nome</b></td>
                <td><b>Cpf</b></td>
                <td><b>Visualizar</b></td>
            </tr>

        <?php

        /**
         * Retorna o array de objetos, depois percorre montando a lista de Clientes
         */

            $listaClientes = getListClientes();

            if($tipoOrdenacao == 2)
            {
                arsort($listaClientes);
            }
            foreach($listaClientes as $cliente)
            {

                    echo "<tr>";
                    echo "<td>" . $cliente->getId() . "</td>";
                    echo "<td>" . $cliente->getNome() . "</td>";
                    echo "<td>" . $cliente->getCpf() . "</td>";
                    echo "<td>";
                    echo "<a href='detalheCliente.php?key=" . $cliente->getId() . "' title='clique para acessar'>Ver Detalhes</a></td>";
                    echo "</td></tr>";


            }

        ?>

        </table>

    </div>

    </form>
</div>


<?php include_once("./pages/layout/footer.php"); ?>