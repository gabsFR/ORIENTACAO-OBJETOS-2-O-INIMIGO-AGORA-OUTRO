<?php

abstract class Inseto{
    protected int $id;
    protected string $especie;
    protected string $moradia;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getEspecie(): string
    {
        return $this->especie;
    }

    public function setEspecie(string $especie): self
    {
        $this->especie = $especie;

        return $this;
    }

    public function getMoradia(): string
    {
        return $this->moradia;
    }

    public function setMoradia(string $moradia): self
    {
        $this->moradia = $moradia;

        return $this;
    }
}