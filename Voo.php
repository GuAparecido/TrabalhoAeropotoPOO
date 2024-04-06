<?php

require_once 'Aeroporto.php';
require_once 'Aeronave.php';
require_once 'Cliente.php';
require_once 'Funcionario.php';
require_once 'Index.php';
require_once 'Passagem.php';
require_once 'Pessoa.php';
require_once 'CheckIn.php';
require_once 'Bagagem.php';

class Voo
{
    private int $codigoVoo;
    private Aeronave $aeronave;
    private Aeroporto $localPartida;
    private Aeroporto $localDestino;
    private float $tempoVoo;
    private DateTime $dataVoo;
    private array $clientes;
    private array $funcionarios;

    public function __construct(int $codigoVoo, Aeronave $aeronave, Aeroporto $localPartida, Aeroporto $localDestino, float $tempoVoo, DateTime $dataVoo)
    {
        $this->codigoVoo = $codigoVoo;
        $this->aeronave = $aeronave;
        $this->localPartida = $localPartida;
        $this->localDestino = $localDestino;
        $this->tempoVoo = $tempoVoo;
        $this->dataVoo = $dataVoo;
        $this->clientes = array();
        $this->funcionarios = array();
    }

    public function getCodigoVoo(): int
    {
        return $this->codigoVoo;
    }

    public function getAeronave(): Aeronave
    {
        return $this->aeronave;
    }

    public function getLocalPartida(): Aeroporto
    {
        return $this->localPartida;
    }

    public function getLocalDestino(): Aeroporto
    {
        return $this->localDestino;
    }

    public function getTempoVoo(): float
    {
        return $this->tempoVoo;
    }

    public function getDataVoo(): DateTime
    {
        return $this->dataVoo;
    }

    public function getClientes(): array
    {
        return $this->clientes;
    }

    public function getFuncionarios(): array
    {
        return $this->funcionarios;
    }

    public function setCodigoVoo(int $codigoVoo): void
    {
        $this->codigoVoo = $codigoVoo;
    }

    public function setAeronave(Aeronave $aeronave): void
    {
        $this->aeronave = $aeronave;
    }

    public function setLocalPartida(Aeroporto $localPartida): void
    {
        $this->localPartida = $localPartida;
    }

    public function setLocalDestino(Aeroporto $localDestino): void
    {
        $this->localDestino = $localDestino;
    }

    public function setTempoVoo(float $tempoVoo): void
    {
        $this->tempoVoo = $tempoVoo;
    }

    public function setDataVoo(DateTime $dataVoo): void
    {
        $this->dataVoo = $dataVoo;
    }

    public function setClientes(array $clientes): void
    {
        $this->clientes = $clientes;
    }

    public function setFuncionarios(array $funcionarios): void
    {
        $this->funcionarios = $funcionarios;
    }

    public function __toString(): string
    {
        $clientes = implode(', ', array_map(function($cliente) {
            return $cliente->getNome();
        }, $this->clientes));
    
        $funcionarios = implode(', ', array_map(function($funcionario) {
        return $funcionario->getNome();
        }, $this->funcionarios));

      return "Código do Voo: " . $this->codigoVoo .
           "\nAeronave que realiza o transporte: " . $this->aeronave->getModelo() . 
          "\nLocal de Partida: " . $this->localPartida->getLocalizacao() .
           "\nLocal de Destino: " . $this->localDestino->getLocalizacao() .
          "\nTempo de Voo: " . $this->tempoVoo .
          "\nData do Voo: " . $this->dataVoo->format('Y-m-d') .
          "\nClientes com reservas: " . $clientes .
          "\nFuncionários: " . $funcionarios . "\n";
    }

    public function adicionarClientes(Cliente $cliente): void
    {
        array_push($this->clientes, $cliente);
    }

    public function removerClientes(Cliente $cliente): void
    {
        $index = array_search($cliente, $this->clientes, true);
        unset($this->clientes[$index]);
    }

    public function adicionarFuncionarios(Funcionario $funcionario): void
    {
        array_push($this->funcionarios, $funcionario);
    }
}
