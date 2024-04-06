<?php

require_once 'Aeronave.php';
require_once 'Aeroporto.php';
require_once 'Cliente.php';
require_once 'Funcionario.php';
require_once 'Index.php';
require_once 'Passagem.php';
require_once 'Pessoa.php';
require_once 'Voo.php';

class Embarque extends Passagem
{
    private Voo $voo;
    private int $quantidadeEmbarcados;
    private int $quantidadeBagagem;

    public function __construct(Voo $voo, int $quantidadeEmbarcados, bool $quantidadeBagagem, Cliente $cliente, int $codigoPassagem, int $numeroAssento, int $guicheEmbarque, DateTime $dataEmbarque)
    {
        $this->voo = $voo;
        $this->quantidadeEmbarcados = $quantidadeEmbarcados;
        $this->quantidadeBagagem = $quantidadeBagagem;
        parent::setCodigoPassagem($codigoPassagem);
        parent::setCliente($cliente);
        parent::setNumeroAssento($numeroAssento);
        parent::setGuicheEmbarque($guicheEmbarque);
        parent::setDataEmbarque($dataEmbarque);
    }

    public function getVoo(): Voo
    {
        return $this->voo;
    }

    public function getQuantidadeEmbarcados(): int
    {
        return $this->quantidadeEmbarcados;
    }

    public function getQuantidadeBagagem(): int
    {
        return $this->quantidadeBagagem;
    }

    public function setVoo(Voo $voo): void
    {
        $this->voo = $voo;
    }

    public function setQuantidadeEmbarcados(int $quantidadeEmbarcados): void
    {
        $this->quantidadeEmbarcados = $quantidadeEmbarcados;
    }

    public function setQuantidadeBagagem(int $quantidadeBagagem): void
    {
        $this->quantidadeBagagem = $quantidadeBagagem;
    }

    public function __toString() : string
    {
        return "Informações do Voo: " . $this->voo . "\n"
        . "Quantidade que embarcou: " . $this->quantidadeEmbarcados . "\n" 
        . "Quantidade de bagagem embarcada: " . $this->quantidadeBagagem . "\n"
        . "Código da passagem: " . $this->getCodigoPassagem() . "\n"
        . "Dados do cliente: " . $this->getCliente() . "\n"
        . "Numero de assentos na aeronave: " . $this->getNumeroAssento() . "\n"
        . "Guichê de embarque: " . $this->getGuicheEmbarque() . "\n"
        . "Data do embarque: " . $this->getDataEmbarque() . "\n";
    }

    
}
