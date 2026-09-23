<?php
require_once("Cabra.php");

class Microondas extends Cabra{
    private int $bonusDmg = 15;

    public function explodir(){

    }

    public function getBonusDmg(): int
    {
        return $this->bonusDmg;
    }

    public function setBonusDmg(int $bonusDmg): self
    {
        $this->bonusDmg = $bonusDmg;

        return $this;
    }
}