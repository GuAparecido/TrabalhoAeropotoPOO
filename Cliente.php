<?php

require_once 'Aeronave.php';
require_once 'Aeroporto.php';
require_once 'Funcionario.php';
require_once 'Index.php';
require_once 'Passagem.php';
require_once 'Pessoa.php';
require_once 'Voo.php';
require_once 'CheckIn.php';
require_once 'Bagagem.php';


class Cliente extends Pessoa
{
    private int $codigoCliente;
    private DateTime $dataCadastro;

    public function __construct(int $codigoCliente, DateTime $dataCadastro, string $nome, DateTime $dataNascimento, string $cpf, string $rg, string $endereco)
    {
        $this->codigoCliente = $codigoCliente;
        $this->dataCadastro= $dataCadastro;
        parent::setNome($nome);
        parent::setDataNascimento($dataNascimento);
        parent::setCpf($cpf);
        parent::setRG($rg);
        parent::setEndereco($endereco);

    }

    public function getCodigoCliente(): int
    {
        return $this->codigoCliente;
    }

    public function getDataCadastro(): DateTime
    {
        return $this->dataCadastro;
    }

    public function setCodigoCliente(int $codigoCliente): void
    {
        $this->codigoCliente = $codigoCliente;
    }

    public function setDataCadastro(DateTime $dataCadastro): void
    {
        $this->dataCadastro = $dataCadastro;
    }

    public function __toString(): string
    {
        return "Código do cliente: " . $this->codigoCliente . "\n"
            . "Data do cadastro: " . $this->dataCadastro . "\n"
            . "Nome: " . $this->getNome() . "\n"
            . "Data de nascimento: " . $this->getDataNascimento() . "\n"
            . "CPF: " . $this->getCpf() . "\n"
            . "RG: " . $this->getRg() . "\n"
            . "Endereço: " . $this->getEndereco() . "\n";
    }
}
