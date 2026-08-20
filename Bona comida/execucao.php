<?php

require_once("modelo/Prato.php");
require_once("modelo/Pedido.php");



$prato1 = new Prato();
$prato1->setNumero(1);
$prato1->setNome("Camarão à Milanesa");
$prato1->setValor(110.00);

$prato2 = new Prato();
$prato2->setNumero(2);
$prato2->setNome("Pizza Margherita");
$prato2->setValor(80.00);

$prato3 = new Prato();
$prato3->setNumero(3);
$prato3->setNome("Macarrão à Carbonara");
$prato3->setValor(60.00);

$prato4 = new Prato();
$prato4->setNumero(4);
$prato4->setNome("Bife à Parmegiana");
$prato4->setValor(75.00);

$prato5 = new Prato();
$prato5->setNumero(5);
$prato5->setNome("Risoto ao Funghi");
$prato5->setValor(70.00);

$pratos = [];
$pedidos = [];
$lucroAtual = 0;

$pratos[] = $prato1;
$pratos[] = $prato2;
$pratos[] = $prato3;
$pratos[] = $prato4;
$pratos[] = $prato5;


do {
    echo "\n~~~~~~~ BONA COMIDA ~~~~~~~\n";
    echo "1° Novo pedido \n";
    echo "2° Cancelar pedido \n";
    echo "3° Listar pedidos     \n";
    echo "4° Total de vendas     \n";
    echo "0° Sair              \n";
    echo "~~~~~~~ BONA COMIDA ~~~~~~~\n";
    $opcao = readline("ESCOLHA: ");

    switch ($opcao) {

        case 1:
            echo "Novo Pedido!\n";
            $p = new Pedido();
            $p->setNomeCliente(readline("Qual o nome do cliente? "));
            $p->setNomeGarcom(readline("Qual o nome do garçom? "));
            echo "Pratos de hoje:\n";
            foreach($pratos as $prato){
                echo $prato->getNumero() . " - " . $prato->getNome() . ": " . $prato->getValor() . "\n";

            }
            $glutao = readline("Qual prato deseja? ");

            foreach($pratos as $pr) {
                if ($glutao == $pr->getNumero()) {
                    $p->setPrato($pr);
                    array_push($pedidos, $p);    
                }
            }

            break;

        case 2:
            echo "Pedidos: ";
            foreach($pedidos as $pe){
                echo $pe;
            }

            if(count($pedidos) > 0) {
                $idx = readline("\nInforme o índice do Pedido para excluir: ");
                if($idx > 0 && $idx <= count($pedidos))
                    array_splice($pedidos, $idx-1, 1);
                else
                    echo "\nÍndice inválido!\n";
            }
            break;

        case 3:
            if(count($pedidos) > 0) {
            echo "Pedidos: \n";
            foreach($pedidos as $pe){
                echo "O cliente " . $pe->getNomeCliente() . ", foi atendido pelo garçom " . $pe->getNomeGarcom() . ", pediu um prato de " . $pe->getPrato()->getNome() . "no valor de R$" . $pe->getPrato()->getValor() . "\n";
            }
            }else{
                echo "Não há pedidos...";
                break;
            }
            break;

        case 4:
            foreach($pedidos as $pe){
                $lucroAtual += $pe->getPrato()->getValor();
            }
            echo "O Valor de todos os pedidos feitos hoje é: " . $lucroAtual;
            break;

        case 0:
            echo "\nObrigado por jantar no Bona Comida!\n";
            break;

        default:
            echo "\nOPÇÃO INVALIDA\n";

            break;
    }
} while ($opcao != 0);

