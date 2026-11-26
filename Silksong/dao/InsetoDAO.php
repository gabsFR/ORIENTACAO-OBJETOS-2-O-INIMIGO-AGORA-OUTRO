<?php

require_once("modelo/Inseto.php");
require_once("modelo/Skong.php");

class InsetoDAO{
    public function inserir(){
        $sql = "INSERT INTO skong (especie, moradia, nome, armas, ferramentas, rosarios, dublador)
                VALUES (?, ?, ?, ?, ?, ?, ?)";
            $conexao = Conexao::getConexao();
        $stm = $conexao->prepare($sql);
    }
}