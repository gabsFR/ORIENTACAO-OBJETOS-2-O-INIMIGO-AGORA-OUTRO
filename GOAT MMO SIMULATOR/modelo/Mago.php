<?php
require_once("Cabra.php");

class Mago extends Cabra{
    private int $bonusDmg = 8;

    public function emitirBolaDeFogo(){

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