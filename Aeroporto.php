<?php

require_once 'Aeronave.php';
require_once 'Cliente.php';
require_once 'Embarque.php';
require_once 'Funcionario.php';
require_once 'Index.php';
require_once 'Passagem.php';
require_once 'Pessoa.php';
require_once 'Voo.php';

class Aeroporto
{
    private int $codigoAeroporto;
    private int $capacidadeAeronaves;
    private int $capacidadeDisponivel;
    private int $capacidadePublico;
    private string $localizacao;
    private array $voos;

    public function __construct(int $codigoAeroporto, int $capacidadeAeronaves, int $capacidadeDisponivel, int $capacidadePublico, string $localizacao)
    {
        $this->codigoAeroporto = $codigoAeroporto;
        $this->capacidadeAeronaves = $capacidadeAeronaves;
        $this->capacidadeDisponivel = $capacidadeDisponivel;
        $this->capacidadePublico = $capacidadePublico;
        $this->localizacao = $localizacao;
        $this->voos = array();
    }

    public function getCodigoAeroporto(): int
    {
        return $this->codigoAeroporto;
    }

    public function getCapacidadeAeronaves(): int
    {
        return $this->capacidadeAeronaves;
    }

    public function getCapacidadeDisponivel(): int
    {
        return $this->capacidadeDisponivel;
    }

    public function getCapacidadePublico(): int
    {
        return $this->capacidadePublico;
    }

    public function getLocalizacao(): string
    {
        return $this->localizacao;
    }

    public function getVoos(): array
    {
        return $this->voos;
    }

    public function setCodigoAeroporto(int $codigoAeroporto): void
    {
        $this->codigoAeroporto = $codigoAeroporto;
    }

    public function setCapacidadeAeronaves(int $capacidadeAeronaves): void
    {
        $this->capacidadeAeronaves = $capacidadeAeronaves;
    }

    public function setCapacidadeDisponivel(int $capacidadeDisponivel): void
    {
        $this->capacidadeDisponivel = $capacidadeDisponivel;
    }

    public function setCapacidadePublico(int $capacidadePublico): void
    {
        $this->capacidadePublico = $capacidadePublico;
    }

    public function setLocalizacao(string $localizacao): void
    {
        $this->localizacao = $localizacao;
    }

    public function setVoos(array $voos): void
    {
        $this->voos = $voos;
    }

    public function __toString(): string
    {
        return "Codigo do Aeroporto " . $this->codigoAeroporto .
            "\nCapacidade de Aeronaves " . $this->capacidadeAeronaves .
            "\nCapacidade de Público " . $this->capacidadePublico .
            "\nLocalização " . $this->localizacao . "\n";
    }

    /* public function setCapacidadeAtual(int $capacidadeAeronaves): void {

        if($capacidadeAeronaves > ($this->$capacidadeAeronaves - $this->capacidadeDisponivel)) {

            $this->capacidadeDisponivel = ($capacidadeAeronaves - ($this->$capacidadeAeronaves - $this->capacidadeDisponivel));
            $this->capacidadeAeronaves = $capacidadeAeronaves;

       }
    } */

    public function adicionarVoo(Voo $voo): void
    {
        if ($this->capacidadeDisponivel > 0) {
            array_push($this->voos, $voo);
            $this->capacidadeDisponivel--;
            echo "Vôo adicionado para " . $this->getLocalizacao() . ", a quantidade de pistas disponíveis agora é de: " . $this->getCapacidadeDisponivel() . "\n";
        }
    }

    public function removerVoo(Voo $voo):void {

        $index = array_search($voo, $this->voos, true);

        if ($index !== false) {

            unset($this->voos[$index]);
            $this->capacidadeDisponivel++;
            echo "Voo de " . $this->getLocalizacao() . " removido, a quantidade de pistas disponíveis agora é de: " . $this->getCapacidadeDisponivel() . "\n";

        }

    }

}
