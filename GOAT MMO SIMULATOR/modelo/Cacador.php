<?php
require_once("Cabra.php");

class Cacador extends Cabra{
    private int $bonusDmg = 5;

    public function pescar(){

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