<?php
require_once("modelo/Tank.php");
require_once("modelo/Mago.php");
require_once("modelo/Cacador.php");
require_once("modelo/Microondas.php");
require_once("modelo/Bicho.php");

$bicho = new Bicho("Colheitadeira de ouro", 50, 10);




echo <<<'ASCII'
▄███▀████     ▄▄▄▄      ▄▄▄▄  █████        ████▀████▄▄▄▄▄ ████▀████▄▄▄▄▄ ▄███▀███▄      ▄███▀████ █████                     ▄▄▄▄ █████       ▄▄▄▄  █████       ▄▄▄▄           
████ ▀▀▀▀ ▄███ ████ ▄███ ████ █████▀▀      ████ ████ ████ ████ ████ ████ ████ ████      ████ ▀▀▀▀ █████ ████▀████▄▄▄▄▄ ████ ████ █████   ▄███ ████ █████▀▀ ▄███ ████  ▄▄█ ▄██▄
████▀████ ████ ████ ████ ████ █████        ████ ████ ████ ████ ████ ████ ████ ████       ▀▀▀▀███▄ █████ ████ ████ ████ ████ ████ █████   ████ ████ █████   ████ ████ ████ ████
████ ████ ████ ████ ▄▄▄▄▄████ █████        ████ ████ ████ ████ ████ ████ ████ ████      ████ ████ ▀▀▀▀▀ ████ ████ ████ ████ ████ █████ ▄ ▄▄▄▄▄████ █████   ████ ████ ████▀███▀
▀███▄████ ▀███▄███▀ ████▄████ ▀████▄█      ████ ████ ████ ████ ████ ████ ▀███▄███▀      ████▄███▀ █████ ████ ████ ████ ▀███▄███▀ ▀████▄█ ████▄████ ▀████▄█ ▀███▄███▀ ████      
ASCII;
echo "\n------ APERTE QUALQUER TECLA PARA COMEÇAR ------\n";
$start = readline("");
echo "\033[H\033[J";

echo "ESCOLHA SUA CLASSE: \n";
echo "1. Tank\n";
echo "2. Mago\n";
echo "3. Caçador\n";
echo "4. Microondas\n";
$option = readline("");
echo "\033[H\033[J";
switch ($option) {
    case 1:
        $cabra = new Tank();
        $cabra->setNome(readline("Qual o nome da sua cabra? "));
        $cabra->setCorPelo(readline("Qual a cor do pelo da sua cabra? "));
        $cabra->setDano(6);
        $vida = 60;
        break;

    case 2:
        $cabra = new Mago();
        $cabra->setNome(readline("Qual o nome da sua cabra? "));
        $cabra->setCorPelo(readline("Qual a cor do pelo da sua cabra? "));
        $cabra->setDano(5);
        $vida = 40;
        break;

    case 3:
        $cabra = new Cacador();
        $cabra->setNome(readline("Qual o nome da sua cabra? "));
        $cabra->setCorPelo(readline("Qual a cor do pelo da sua cabra? "));
        $cabra->setDano(4);
        $vida = 50;
        break;

    case 4:
        $cabra = new Microondas();
        $cabra->setNome(readline("Qual o nome da sua cabra? "));
        $cabra->setCorPelo(readline("Qual a cor do pelo da sua cabra? "));
        $cabra->setDano(4);
        $vida = 70;
        break;
    
    default:
        echo "OPÇÃO INVALIDA, RESETANDO.";
        break;
}
echo "\033[H\033[J";
echo "ESCOLHA ONDE IRA SPAWNAR: \n";
echo "ps: somente as localizações com numeros contam.\n";

echo "+----------------------------------------------------------------------------------------------------------+\n";
echo "|     ^^^^^^^^                    ~~~~~~~                         ^^^^^^^^^^                  ^^^^^^^^^    |\n";
echo "|   ^^^^^^^^^^^   ALVESTA [3]   ~~     ~~       TWISTRAM []    ^^^^^^^^^^^^                  ^^^^^^^^^     |\n";
echo "|  ^^^^^^^^^^^^^    /\\        ~~         ~~        /\\          ^^^^^^^^^^^^^^                GOATWIND [2]|\n";
echo "| ^^^ OLDGOAT ^^^   ||       ~~           ~~      ||          ^^^^^^^^^^^^^^^^               ^^^^^^^^^     |\n";
echo "| ^^^ MOUNTAIN ^^^  ||        \\            /      ||              ^^^^^^^^^                               |\n";
echo "| ^^^^^^^^^^^^^^^^^ \\         \\          /        /                                                      |\n";
echo "|       ^^^^^^^^^     \\       MERMAID'S TALES    /                                                        |\n";
echo "|                       \\          ~~~           /                     [ ] GOLDHILLS                      |\n";
echo "|                        \\       ~~   ~~        /                           \\                            |\n";
echo "|                         \\____~~     ~~_______/                            \\___ [ ] JOUSTING            |\n";
echo "|                              \\     /                                           TOURNAMENT               |\n";
echo "|                               \\   /                                                                     |\n";
echo "|                    [ ]         \\ /                    GOATSHIRE [1]                                     |\n";
echo "|                GLARBLARGLE      ~                          |                                             |\n";
echo "|                   BEACH         ~                          |          [ ] GOLD FARM                      |\n";
echo "|        ~~~~~~~~~~~~~~~~         ~                          |             /                               |\n";
echo "|     ~~~              ~~~        ~                          \\            /                               |\n";
echo "|   ~~                    ~~      ~                           \\          /                                |\n";
echo "| ~~                        \\____/                             \\________/                                |\n";
echo "|                              [ ] BULLGRUHZH                         ^^^^^^^^^^^                          |\n";
echo "|                                                                     ^^^^^^^^^^^^^                        |\n";
echo "|                                                                    ^^^^^^^^^^^^^^^             [*]       |\n";
echo "|                                                                                              SNOWFLAKE   |\n";
echo "|                                                                                               FACTORY    |\n";
echo "|~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~|\n";
echo "+----------------------------------------------------------------------------------------------------------+\n";

$option = readline("Eu quero spawnar no: ");
echo "\033[H\033[J";
switch ($option) {
    case 1:
        echo "Voce surge na vila de Goatshire, uma pequena vila ao lado dos campos de Ouro. Em sua frente há uma pessoa desesperada, oq vc faz?\n";
        echo "1. ir falar com a pessoa\n";
        echo "2. roubar vendinha\n";
        echo "3. bahhhh\n";
        $option = readline("");
            switch ($option) {
                case 1:
                    echo "Moça aleatoria: Pfvr, ajude meu filhinho timmy, ele ta preso em um Golem de Colheita de Ouro! lhe pagarei grandes quantias de dinheiro!\n" . $cabra->getNome(). ": Bahhhhh.";
                    $start = readline("");
                    echo "devido ao fato de vc estar em altas dividas com os anões de Bullgruhzh, vc decide ajudar essa mulher, e parte em direção aos Campos de Ouro.\n";
                    echo "Chegando aos campos de ouro, voce se depara com multiplas maquinas com serras colhendo plantas que dão ouro, mas uma delas tem um piazinho preso nela, ele está desacordado, hora de pagar suas dividas.";
                    $start = readline("");
                    echo "\033[H\033[J";

                    break;
                case 2:
                    # code...
                    break;
                case 3:
                    # code...
                    break;
                
                default:
                    # code...
                    break;
            }
        break;
    
    default:
        # code...
        break;
}