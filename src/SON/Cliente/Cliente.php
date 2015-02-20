<?php

namespace SON\Cliente;

class Cliente{

    private $id;
    private $nome;
    private $email;
    private $endereco;
    private $tipoPessoa;



    public function __construct($nome , $endereco, $tipoPessoa)
    {

        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->tipoPessoa = $tipoPessoa;

    }

    /**
     * @return mixed
     */
    public function getTipoPessoa()
    {
        return $this->tipoPessoa;
    }

    /**
     * @param mixed $tipoPessoa
     */
    public function setTipoPessoa($tipoPessoa)
    {
        $this->tipoPessoa = $tipoPessoa;
    }



    public function returnTipoPessoa()
    {

        if($this->tipoPessoa instanceof PessoaFisica)
        {
            return "Pessoa_Física";
        }else{
            return "Pessoa_Jurídica";
        }
    }

    public function returnTipoPessoaId()
    {

        if($this->tipoPessoa instanceof PessoaFisica)
        {
            return 1;
        }else{
            return 2;
        }
    }

    public function returnDoc()
    {
        if($this->tipoPessoa instanceof PessoaFisica)
        {
            return $this->tipoPessoa->getCpf();
        }else{
            return $this->tipoPessoa->getCnpj();
        }
    }

    public function getEnderecoCobranca()
    {
        return $this->tipoPessoa->getEnderecoCobranca();
    }

    public function setEnderecoCobranca($enderecoCobranca)
    {
        return $this->tipoPessoa->setEnderecoCobranca($enderecoCobranca);
    }

    public function returnEstrelas()
    {
        return $this->tipoPessoa->getEstrelas();

    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }




} 