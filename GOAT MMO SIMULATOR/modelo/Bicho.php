<?php
require_once("Cabra.php");
require_once("Tank.php");
require_once("Mago.php");
require_once("Cacador.php");
require_once("Microondas.php");

class Bicho{
    private string $bicho;
    private int $vida;
    private int $danoBicho;

    public function tomarDano(int $dano){
        $this->vida -= $dano;
    }
    public function ataque(Cabra $cabra){
        $cabra->tomarDano($this->danoBicho);
    }

    public function __construct(string $b, int $v, int $dmg)
    {
        $this->bicho = $b;
        $this->vida = $v;
        $this->danoBicho = $dmg;
    }

    public function getBicho(): string
    {
        return $this->bicho;
    }

    public function setBicho(string $bicho): self
    {
        $this->bicho = $bicho;

        return $this;
    }

    public function getVida(): int
    {
        return $this->vida;
    }

    public function setVida(int $vida): self
    {
        $this->vida = $vida;

        return $this;
    }

    public function getDanoBicho(): int
    {
        return $this->danoBicho;
    }

    public function setDanoBicho(int $danoBicho): self
    {
        $this->danoBicho = $danoBicho;

        return $this;
    }
}
