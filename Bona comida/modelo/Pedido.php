<?php

require_once("Prato.php");

class Pedido{

    private string $nomeCliente;
    private string $nomeGarcom ;
    private Prato $prato;

    public function __toString()
    {
        $dados = "Cliente: " . $this->nomeCliente . "\n";
        $dados .= "Garçom: " . $this->nomeGarcom . "\n";
        $dados .= "Prato: " . $this->prato . "\n";

        return $dados;
    }

    public function getNomeCliente(): string
    {
        return $this->nomeCliente;
    }

    public function setNomeCliente(string $nomeCliente): self
    {
        $this->nomeCliente = $nomeCliente;

        return $this;
    }

    public function getNomeGarcom(): string
    {
        return $this->nomeGarcom;
    }

    public function setNomeGarcom(string $nomeGarcom): self
    {
        $this->nomeGarcom = $nomeGarcom;

        return $this;
    }

    public function getPrato(): Prato
    {
        return $this->prato;
    }

    public function setPrato(Prato $prato): self
    {
        $this->prato = $prato;

        return $this;
    }
}