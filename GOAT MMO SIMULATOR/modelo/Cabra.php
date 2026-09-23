<?php
require_once("Bicho.php");
class Cabra {
    protected string $nome;
    protected string $corPelo;
    protected int $dano;
    protected int $vida = 100;

    public function cabecada(Bicho $bicho){
        $bicho->tomarDano($this->dano);
    }
    public function tomarDano(int $danoBicho){
        $this->vida -= $danoBicho;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getCorPelo(): string
    {
        return $this->corPelo;
    }

    public function setCorPelo(string $corPelo): self
    {
        $this->corPelo = $corPelo;

        return $this;
    }

    public function getDano(): int
    {
        return $this->dano;
    }
    public function setDano(int $dano): self
    {
        $this->dano = $dano;

        return $this;
    }
}