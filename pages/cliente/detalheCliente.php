<!-- ARQUIVO APRESENTA OS DETALHES DO CLIENTE -->
<?php
include_once("../layout/header_padrao.php");
include  "../../src/SON/Cliente/ClienteDAO.php";
include_once("../layout/menu.php");
?>



<div class="span10">
    <form class="form-horizontal" action="contato" role="form" method="post" >
    <div class="well">

        <?php

            /**
             * CAPTURA O PARAMENTRO KEY, E PERCORRE O ARRAY PARA LOCALIZAR O CLIENTE PELO ID
             * */

            $idCliente = $_GET['key'];
            $listaClientes = getListClientes();
            foreach($listaClientes as $cliente){

                /**
                 * VERIFICA SE O CLIENTE EXISTE,CASO SIM, APRESENTA OS DADOS
                 */
                if ($cliente->getId() == $idCliente){

                   echo "<h1>Cliente Selecionado:</h1>";


                   echo "<div class='form-group'>";
                   echo "   <label for='id' class='col-sm-2 control-label'>Id:</label>";
                   echo "   <div class='col-sm-10'>";
                   echo "     <input type='text' class='form-control' id='id' name='id' value=".$cliente->getId()." />";
                   echo  "  </div>";
                   echo  "  </div>";

                   echo "  <div class='form-group'>";
                   echo "    <label for='nome' class='col-sm-2 control-label'>Nome:</label>";
                   echo "      <div class='col-sm-10'>";
                   print("         <input type='text' class='form-control' id='nome' name='nome' value=".$cliente->getNome()." />");
                   echo "     </div>";
                   echo "  </div>";

                    echo " <div class='form-group'>";
                    echo "    <label for='tipo' class='col-sm-2 control-label'>Tipo Pessoa:</label>";
                    echo "      <div class='col-sm-20'>";
                    echo "         <input type='text' class='form-control' id='tipo' name='tipo' value=".$cliente->returnTipoPessoa()." />";
                    echo "     </div>";
                    echo " </div>";


                    echo "  <div class='form-group'>";

                    echo "     <label for='cpf' class='col-sm-2 control-label'>CPF/CNPJ:</label>";

                    echo "     <div class='col-sm-10'>";
                    print("        <input type='text' class='form-control' id='cpf' name='cpf' value=". $cliente->returnDoc() ." />");
                    echo "     </div>";
                    echo "  </div>";


                    echo " <div class='form-group'>";
                    echo "    <label for='endereco' class='col-sm-2 control-label'>Endereço:</label>";

                    echo "     <div class='col-sm-10'>";
                    echo "        <input type='text' class='form-control' id='endereco' name='endereco' value=". $cliente->getEndereco() ." />";
                    echo "     </div>";
                    echo " </div>";

                    echo " <div class='form-group'>";
                    echo "    <label for='endereco' class='col-sm-2 control-label'>Endereço de Cobrança:</label>";

                    echo "     <div class='col-sm-10'>";
                    echo "        <input type='text' class='form-control' id='endereco' name='endereco' value=". $cliente->getEnderecoCobranca() ." />";
                    echo "     </div>";
                    echo " </div>";

                   echo " <hr />";
                   echo " <a href='listClientes.php?ordem=1'>Voltar</a>";
                }

            }
        ?>


    </div>

    </form>

</div>

<?php include_once("../layout/footer.php"); ?>
