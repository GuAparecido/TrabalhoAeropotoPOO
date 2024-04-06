<?php

require_once 'Aeronave.php';
require_once 'Aeroporto.php';
require_once 'Cliente.php';
require_once 'Embarque.php';
require_once 'Funcionario.php';
require_once 'Index.php';
require_once 'Passagem.php';
require_once 'Voo.php';

class Pessoa
{
    private string $nome;
    private DateTime $dataNascimento;
    private string $cpf;
    private string $rg;
    private string $endereco;

    public function __construct(string $nome, dateTime $dataNascimento, string $cpf, string $rg, string $endereco)
    {
        $this->nome = $nome;
        $this->dataNascimento = $dataNascimento;
        $this->rg = $rg;
        $this->cpf = $cpf;
        $this->endereco = $endereco;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getDataNascimento(): dateTime
    {
        return $this->dataNascimento;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function getRg(): string
    {
        return $this->rg;
    }

    public function getEndereco(): string
    {
        return $this->endereco;
    }

    public function setNome(string $nome): void
    {
        $this->nome = $nome;
    }

    public function setDataNascimento(dateTime $dataNascimento): void
    {
        $this->dataNascimento = $dataNascimento;
    }

    public function setCpf(string $cpf): void
    {
        $this->cpf = $cpf;
    }

    public function setRg(string $rg): void
    {
        $this->rg = $rg;
    }

    public function setEndereco(string $endereco): void
    {
        $this->endereco = $endereco;
    }

    public function __toString(): string
    {
        return "Nome: " . $this->nome . "\n" .
            "Data de Nascimento: " . $this->dataNascimento->format('Y-m-d') . "\n" .
            "CPF: " . $this->cpf . "\n" .
            "RG: " . $this->rg . "\n" .
            "Endereço: " . $this->endereco . "\n";
    }
}
