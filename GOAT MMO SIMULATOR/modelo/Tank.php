<?php
require_once("Cabra.php");

class Tank extends Cabra{
    private int $bonusDmg = 10;

    public function investir(){

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