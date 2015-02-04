<?php
namespace SON\Cliente;


class PessoaFisica implements ClienteVip, EnderecoCobranca
{

    private $cpf;
    private $estrelas;
    private $enderecoCobranca;


    /**
     * metodo Construtor
     * @param $cpf
     */
    function __construct($cpf)
    {
        $this->cpf = $cpf;
        $this->estrelas = 0;
    }





    public function setGrau($quantEstrelas)
    {
        $this->estrelas = $quantEstrelas;
    }

    public function verificaTipoPessoa()
    {
        return "Pessoa Física";

    }






    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
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