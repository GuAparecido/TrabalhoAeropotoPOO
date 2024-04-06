<?php
require_once 'Aeroporto.php';
require_once 'Cliente.php';
require_once 'Embarque.php';
require_once 'Funcionario.php';
require_once 'Index.php';
require_once 'Passagem.php';
require_once 'Pessoa.php';
require_once 'Voo.php';

class Aeronave
{
    private int $codigoAeronave;
    private string $modelo;
    private int $capacidadePassageiros;
    private TipoMotor $tipoMotor;

    public function __construct(int $codigoAeronave, string $modelo, int $capacidadePassageiros, TipoMotor $tipoMotor)
    {
        $this->codigoAeronave = $codigoAeronave;
        $this->modelo = $modelo;
        $this->capacidadePassageiros = $capacidadePassageiros;
        $this->tipoMotor = $tipoMotor;
    }

    public function getCodigoAeronave(): int
    {
        return $this->codigoAeronave;
    }

    public function getModelo(): string
    {
        return $this->modelo;
    }

    public function getCapacidadePassageiros(): int
    {
        return $this->capacidadePassageiros;
    }

    public function getTipoMotor(): TipoMotor
    {
        return $this->tipoMotor;
    }

    public function setCodigoAeronave(int $codigoAeronave): void
    {
        $this->codigoAeronave = $codigoAeronave;
    }

    public function setModelo(string $modelo): void
    {
        $this->modelo = $modelo;
    }

    public function setCapacidadePassageiros(int $capacidadePassageiros): void
    {
        $this->capacidadePassageiros = $capacidadePassageiros;
    }

    public function setTipoMotor(TipoMotor $tipoMotor): void
    {
        $this->tipoMotor = $tipoMotor;
    }

    public function __toString(): string
    {
        return "Codigo da Aeronave: " . $this-> codigoAeronave .
            "\nModelo: " . $this->modelo .
            "\nCapacidade de Público: " . $this->capacidadePassageiros .
            "\nTipo do motor: " . $this->tipoMotor . "\n";
    }
}
