<?php

require_once 'Aeronave.php';
require_once 'Aeroporto.php';
require_once 'Cliente.php';
require_once 'Embarque.php';
require_once 'Index.php';
require_once 'Passagem.php';
require_once 'Pessoa.php';
require_once 'Voo.php';

class Funcionario extends Pessoa
{
    private int $codigoFuncionario;
    private Cargo $cargoFuncionario;
    private Contrato $contrato;
    private float $salario;
    private DateTime $dataContratacao;

    public function __construct(int $codigoFuncionario, Cargo $cargoFuncionario, Contrato $contrato, float $salario, 
    DateTime $dataContratacao, string $nome, DateTime $dataNascimento, string $cpf, string $rg, string $endereco)
    {
        $this->codigoFuncionario = $codigoFuncionario;
        $this->cargoFuncionario = $cargoFuncionario;
        $this->contrato = $contrato;
        $this->salario = $salario;
        $this->dataContratacao = $dataContratacao;
        parent::setNome($nome);
        parent::setDataNascimento($dataNascimento);
        parent::setCpf($cpf);
        parent::setRg($rg);
        parent::setEndereco($endereco);

    }

    public function getCodigoFuncionario(): int
    {
        return $this->codigoFuncionario;
    }

    public function getCargoFuncionario(): Cargo
    {
        return $this->cargoFuncionario;
    }

    public function getContrato(): Contrato
    {
        return $this->contrato;
    }

    public function getSalario(): float
    {
        return $this->salario;
    }

    public function getDataContratacao(): DateTime
    {
        return $this->dataContratacao;
    }

    public function setCodigoFuncionario(int $codigoFuncionario): void
    {
        $this->codigoFuncionario = $codigoFuncionario;
    }

    public function setCargoFuncionario(Cargo $cargoFuncionario): void
    {
        $this->cargoFuncionario = $cargoFuncionario;
    }

    public function setContrato(string $contrato): void
    {
        $this->contrato = $contrato;
    }

    public function setSalario(float $salario): void
    {
        $this->salario = $salario;
    }

    public function setDataContratacao(DateTime $dataContratacao): void
    {
        $this->dataContratacao = $dataContratacao;
    }

    public function __toString() : string
    {
        return "Nome do funcionário: " . $this->getNome() . "\n" 
        . "Código do funcionário: " . $this->codigoFuncionario . "\n" 
        . "Cargo do funcionário: " . $this->cargoFuncionario . "\n"
        . "Tipo de contrato " . $this->contrato . "\n"
        . "Salario: " . $this->salario . "\n"
        . "Data de contratação: " . $this->dataContratacao . "\n"
        . "Data de nascimento:  " . $this->getDataNascimento() . "\n"
        . "CPF: " . $this->getCpf() . "\n"
        . "RG: " . $this->getRg() . "\n"
        . "Endereço: " . $this->getEndereco() . "\n";
    }
}
