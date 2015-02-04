<?php
namespace SON\Cliente;

class PessoaJuridica implements ClienteVip, EnderecoCobranca
{

    private $cnpj;
    private $estrelas;
    private $enderecoCobranca;



    function __construct($cnpj)
    {

        $this->cnpj = $cnpj;
        $this->estrelas = 0;
    }



    public function setGrau($quantEstrelas)
    {
        $this->estrelas = $quantEstrelas;
    }

    public function verificaTipoPessoa()
    {
        return "Pessoa Jurídica";

    }





    /**
     * @return mixed
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * @param mixed $cnpj
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }

    /**
     * @return mixed
     */
    public function getEstrelas()
    {
        return $this->estrelas;
    }

    /**
     * @param mixed $estrelas
     */
    public function setEstrelas($estrelas)
    {
        $this->estrelas = $estrelas;
    }

    /**
     * @return mixed
     */
    public function getEnderecoCobranca()
    {
        return $this->enderecoCobranca;
    }

    /**
     * @param mixed $enderecoCobranca
     */
    public function setEnderecoCobranca($enderecoCobranca)
    {
        $this->enderecoCobranca = $enderecoCobranca;
    }




}