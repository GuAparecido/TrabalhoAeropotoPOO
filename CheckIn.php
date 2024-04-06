<?php
require_once 'Aeroporto.php';
require_once 'Aeronave.php';
require_once 'Cliente.php';
require_once 'Funcionario.php';
require_once 'Index.php';
require_once 'Passagem.php';
require_once 'Pessoa.php';
require_once 'Voo.php';
require_once 'Bagagem.php';

class Checkin
{
    private Cliente $cliente;
    private Passagem $passagem;

    public function __construct(Cliente $cliente, Passagem $passagem)
    {
        $this->cliente = $cliente;
        $this->passagem = $passagem;
    }

    public function setCliente(Cliente $cliente): void
    {
        $this->cliente = $cliente;
    }

    public function setPassagem(Passagem $passagem): void
    {
        $this->passagem = $passagem;
    }

    public function getCliente(): Cliente
    {
        return $this->cliente;
    }

    public function getPassagem(): Passagem
    {
        return $this->passagem;
    }

    public function validarPassagem(): bool
    {
        if ($this->passagem->getCliente() === $this->cliente) {
            echo $this->cliente->getNome() . "\n";
            echo "A passagem é válida.\n";
            return true;
        } else {
            echo $this->cliente->getNome() . "\n";
            echo "A passagem é inválida, você será removido do voo.\n";
        }
        $this->passagem->getVoo()->removerClientes($this->cliente);
        return false;
        
    }

}
