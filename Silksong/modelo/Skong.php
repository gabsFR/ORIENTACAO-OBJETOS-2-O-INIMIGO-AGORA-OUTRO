<?php
require_once("Inseto.php");

class Skong extends Inseto{
    private string $nome;
    private string $armas;
    private string $ferramentas;
    private int $rosarios;
    private string $dublador;

    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    public function getArmas(): string
    {
        return $this->armas;
    }

    public function setArmas(string $armas): self
    {
        $this->armas = $armas;

        return $this;
    }

    public function getFerramentas(): string
    {
        return $this->ferramentas;
    }

    public function setFerramentas(string $ferramentas): self
    {
        $this->ferramentas = $ferramentas;

        return $this;
    }

    public function getRosarios(): int
    {
        return $this->rosarios;
    }

    public function setRosarios(int $rosarios): self
    {
        $this->rosarios = $rosarios;

        return $this;
    }

    public function getDublador(): string
    {
        return $this->dublador;
    }

    public function setDublador(string $dublador): self
    {
        $this->dublador = $dublador;

        return $this;
    }
}