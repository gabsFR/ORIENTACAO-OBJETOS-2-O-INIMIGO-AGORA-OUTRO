
<?php
require_once("util/Conexao.php");
require_once("modelo/Skong.php");
require_once("dao/InsetoDAO.php");

do {
    echo "\n======= 🕷 Diario da Caçadora 🕷 =======\n";
    echo "1 - Registrar Inseto\n";
    echo "2 - Listar Bestiario\n";
    echo "3 - Buscar Inseto \n";
    echo "4 - Excluir Inseto\n";
    echo "0 - Sair\n";

    $opcao = readline("");
    switch ($opcao) {
        case 1:
            $bug = new Skong;
            $bug->setEspecie(readline("Qual a espécie? "));
            $bug->setMoradia(readline("Onde a criatura vive? "));
            $bug->setArmas(readline("A criatura possui uma arma? "));
            $bug->setFerramentas(readline("A criatura possui ferramentas? "));
            $bug->setRosarios(readline("Quantos rosarios a criatura tem? "));
            break;
        
        default:
            echo "Opção Invalida.";
            break;
    }
} while ($opcao != 0);
