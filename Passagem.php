<?php

require_once 'Aeronave.php';
require_once 'Aeroporto.php';
require_once 'Cliente.php';
require_once 'Embarque.php';
require_once 'Funcionario.php';
require_once 'Index.php';
require_once 'Pessoa.php';
require_once 'Voo.php';

class Passagem
{
    private Cliente $cliente;
    private int $codigoPassagem;
    private int $numeroAssento;
    private int $guicheEmbarque;
    private DateTime $dataEmbarque;

    public function __construct(Cliente $cliente, int $codigoPassagem, int $numeroAssento, int $guicheEmbarque, DateTime $dataEmbarque)
    {
        $this->cliente = $cliente;
        $this->codigoPassagem = $codigoPassagem;
        $this->numeroAssento = $numeroAssento;
        $this->guicheEmbarque = $guicheEmbarque;
        $this->dataEmbarque = $dataEmbarque;
    }

    public function getCliente(): Cliente
    {
        return $this->cliente;
    }

    public function getCodigoPassagem(): int
    {
        return $this->codigoPassagem;
    }

    public function getNumeroAssento(): int
    {
        return $this->numeroAssento;
    }

    public function getGuicheEmbarque(): int
    {
        return $this->guicheEmbarque;
    }

    public function getDataEmbarque(): DateTime
    {
        return $this->dataEmbarque;
    }

    public function setCliente(Cliente $cliente): void
    {
        $this->cliente = $cliente;
    }

    public function setCodigoPassagem(int $codigoPassagem): void
    {
        $this->codigoPassagem = $codigoPassagem;
    }

    public function setNumeroAssento(int $numeroAssento): void
    {
        $this->numeroAssento = $numeroAssento;
    }

    public function setGuicheEmbarque(int $guicheEmbarque): void
    {
        $this->guicheEmbarque = $guicheEmbarque;
    }

    public function setDataEmbarque(DateTime $dataEmbarque): void
    {
        $this->dataEmbarque = $dataEmbarque;
    }

    public function validarPassagem(Passagem $dataEmbarque, Voo $dataVoo): bool
    {
        $dataEmbarque = $dataEmbarque->getDataEmbarque();
        $dataVoo = $dataVoo->getDataVoo();
        
        if($dataEmbarque <= $dataVoo) {
            return true; 
            echo "A passagem é válida.";
        } else {
            echo "A passagem está vencida.";
        }
    }
    
    public function __toString(): string
    {
        return "Cliente: " . $this->cliente->__toString() . "\n" .
               "Código da Passagem: " . $this->codigoPassagem . "\n" .
               "Número do Assento: " . $this->numeroAssento . "\n" .
               "Guichê de Embarque: " . $this->guicheEmbarque . "\n" .
               "Data de Embarque: " . $this->dataEmbarque->format('Y-m-d H:i:s') . "\n";
    }

}