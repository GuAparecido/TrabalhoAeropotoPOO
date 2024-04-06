<?php
require_once 'Aeroporto.php';
require_once 'Aeronave.php';
require_once 'Cliente.php';
require_once 'Funcionario.php';
require_once 'Index.php';
require_once 'Passagem.php';
require_once 'Pessoa.php';
require_once 'Voo.php';
require_once 'CheckIn.php';

class Bagagem
{
    private int $codigoBagagem;
    private int $peso;
    private Cliente $cliente;

    public function __construct(int $codigoBagagem, int $peso, Cliente $cliente)
    {
        $this->codigoBagagem = $codigoBagagem;
        $this->peso = $peso;
        $this->cliente = $cliente;
    }

    public function getCodigoBagagem(): int
    {
        return $this->codigoBagagem;
    }

    public function getPeso(): int
    {
        return $this->peso;
    }

    public function getCliente(): Cliente
    {
        return $this->cliente;
    }

    public function setCodigoBagagem(int $codigoBagagem): void
    {
        $this->codigoBagagem = $codigoBagagem;
    }

    public function setPeso(int $peso): void
    {
        $this->peso = $peso;
    }

    public function setCliente(Cliente $cliente): void
    {
        $this->cliente = $cliente;
    }
}
