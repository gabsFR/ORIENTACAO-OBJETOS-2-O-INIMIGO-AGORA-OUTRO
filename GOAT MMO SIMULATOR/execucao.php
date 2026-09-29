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
        break;

    case 2:
        $cabra = new Mago();
        $cabra->setNome(readline("Qual o nome da sua cabra? "));
        $cabra->setCorPelo(readline("Qual a cor do pelo da sua cabra? "));
        $cabra->setDano(5);
        break;

    case 3:
        $cabra = new Cacador();
        $cabra->setNome(readline("Qual o nome da sua cabra? "));
        $cabra->setCorPelo(readline("Qual a cor do pelo da sua cabra? "));
        $cabra->setDano(4);
        break;

    case 4:
        $cabra = new Microondas();
        $cabra->setNome(readline("Qual o nome da sua cabra? "));
        $cabra->setCorPelo(readline("Qual a cor do pelo da sua cabra? "));
        $cabra->setDano(4);
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
echo "|   ^^^^^^^^^^^   ALVESTA []    ~~     ~~       TWISTRAM [3]    ^^^^^^^^^^^^                 ^^^^^^^^^     |\n";
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
        $option = readline("");
        switch ($option) {
            case 1:
                echo "Moça aleatoria: Pfvr, ajude meu filhinho timmy, ele ta preso em um Golem de Colheita de Ouro! lhe pagarei grandes quantias de dinheiro!\n" . $cabra->getNome() . ": Bahhhhh.";
                $start = readline("");
                echo "devido ao fato de vc estar em altas dividas com os anões de Bullgruhzh, vc decide ajudar essa mulher, e parte em direção aos Campos de Ouro.\n";
                echo "Chegando aos campos de ouro, voce se depara com multiplas maquinas com serras colhendo plantas que dão ouro, mas uma delas tem um piazinho preso nela, ele está desacordado, hora de pagar suas dividas.";
                $start = readline("");
                echo "\033[H\033[J";
                $bicho = new Bicho("Colheitadora de ouro", 25, 10);
                echo "Combate Simulado!\n";
                for ($i = 1; $i < 10000; $i++) {
                    echo "Rodada: " . $i . "\n";
                    echo "Bicho: " . $bicho->getBicho() . " | Vida: " . $bicho->getVida() . "\n";
                    echo $cabra->getNome() . " | Vida: " . $cabra->getVida() . "\n";

                    echo $bicho->getBicho() . " toma ";
                    $cabra->cabecada($bicho);
                    echo "de dano.\n";
                    echo $cabra->getNome() . " toma ";
                    $bicho->ataque($cabra);
                    echo "de dano.\n";


                    if ($bicho->getVida() <= 0) {
                        echo "VICTORY!";
                        $start = readline("");
                        break;
                    } else {
                        $start = readline("");
                        echo "\033[H\033[J";
                    }
                    echo "Voce destroi o bicho, recebe o pagamento e quita sua divida com a máfia de Bullgruhzh.\n";
                    echo <<<'ASCII'
                              
                    ▄▄▄▄▄▄▄▄   ▄▄▄▄▄▄   ▄▄▄  ▄▄▄ 
                    ██▀▀▀▀▀▀   ▀▀██▀▀   ███  ███ 
                    ██           ██     ████████ 
                    ███████      ██     ██ ██ ██ 
                    ██           ██     ██ ▀▀ ██ 
                    ██         ▄▄██▄▄   ██    ██ 
                    ▀▀         ▀▀▀▀▀▀   ▀▀    ▀▀ 
                                                
                                                
                    ASCII;
                }
                break;

            case 2:
                echo "Voce rouba todas as mangas da vendinha, e sai correndo em direção aos Campos de ouro\n" . $cabra->getNome() . ": Bahhhhh.";
                $start = readline("");
                echo "Chegando aos campos de ouro, voce se depara com multiplas maquinas com serras colhendo plantas que dão ouro, mas uma delas está mais cheia que as outras, provavelmente o suficiente para quitar suas dividas, vamos lá";
                $start = readline("");
                echo "\033[H\033[J";
                $bicho = new Bicho("Colheitadora de ouro", 25, 10);
                echo "Combate Simulado!\n";
                for ($i = 1; $i < 10000; $i++) {
                    echo "Rodada: " . $i . "\n";
                    echo "Bicho: " . $bicho->getBicho() . " | Vida: " . $bicho->getVida() . "\n";
                    echo $cabra->getNome() . " | Vida: " . $cabra->getVida() . "\n";

                    echo $bicho->getBicho() . " toma ";
                    $cabra->cabecada($bicho);
                    echo "de dano.\n";
                    echo $cabra->getNome() . " toma ";
                    $bicho->ataque($cabra);
                    echo "de dano.\n";
                    $start = readline("");

                    if ($bicho->getVida() <= 0) {
                        echo "VICTORY!";
                        break;
                    } else {
                        echo "\033[H\033[J";
                    }

                    echo "Voce destroi o bicho, recebe o pagamento e quita sua divida com a máfia de Bullgruhzh.\n";
                    echo <<<'ASCII'
                              
                    ▄▄▄▄▄▄▄▄   ▄▄▄▄▄▄   ▄▄▄  ▄▄▄ 
                    ██▀▀▀▀▀▀   ▀▀██▀▀   ███  ███ 
                    ██           ██     ████████ 
                    ███████      ██     ██ ██ ██ 
                    ██           ██     ██ ▀▀ ██ 
                    ██         ▄▄██▄▄   ██    ██ 
                    ▀▀         ▀▀▀▀▀▀   ▀▀    ▀▀ 
                                                     
                    ASCII;
                }

            default:
                echo "VALOR INVALIDO";
                break;
        }
        break;

    case 2:
        echo "Voce surge na cidade de GoatWind, A grande cidade. Em sua frente há um enorme castelo, o que vc faz?\n";
        echo "1. ir explorar o castelo\n";
        echo "2. espancar um guarda\n";
        $option = readline("");
        switch ($option) {
            case 1:
                echo "Passando pelas ruas de Goatwind, voce entra nesses grandes portões e se depara com a sala do rei, bem na hora de um grande torneio" . $cabra->getNome() . ": Bahhhhh.";
                $start = readline("");
                echo "devido ao fato de vc estar em altas dividas com os anões de Bullgruhzh, vc decide participar desse torneio em busca de dinheiro.\n";
                echo "entrando no ringue, voce se depara com multiplas pessoas desacordadas, e atrás delas, uma 'Aranha' gigante (é na verdade uma formiga gigante), hora de pagar as dívidas";
                $start = readline("");
                echo "\033[H\033[J";
                $bicho = new Bicho("'Aranha' Gigante", 30, 12);
                echo "Combate Simulado!\n";
                for ($i = 1; $i < 10000; $i++) {
                    echo "Rodada: " . $i . "\n";
                    echo "Bicho: " . $bicho->getBicho() . " | Vida: " . $bicho->getVida() . "\n";
                    echo $cabra->getNome() . " | Vida: " . $cabra->getVida() . "\n";

                    echo $bicho->getBicho() . " toma ";
                    $cabra->cabecada($bicho);
                    echo "de dano.\n";
                    echo $cabra->getNome() . " toma ";
                    $bicho->ataque($cabra);
                    echo "de dano.\n";


                    if ($bicho->getVida() <= 0) {
                        echo "VICTORY!";
                        $start = readline("");
                        break;
                    } else {
                        $start = readline("");
                        echo "\033[H\033[J";
                    }
                    echo "Voce destroi o bicho, recebe o pagamento e quita sua divida com a máfia de Bullgruhzh.\n";
                    echo <<<'ASCII'
                              
                    ▄▄▄▄▄▄▄▄   ▄▄▄▄▄▄   ▄▄▄  ▄▄▄ 
                    ██▀▀▀▀▀▀   ▀▀██▀▀   ███  ███ 
                    ██           ██     ████████ 
                    ███████      ██     ██ ██ ██ 
                    ██           ██     ██ ▀▀ ██ 
                    ██         ▄▄██▄▄   ██    ██ 
                    ▀▀         ▀▀▀▀▀▀   ▀▀    ▀▀ 
                                                
                                                
                    ASCII;
                }
                break;

            case 2:
                echo "Voce surge na cidade de GoatWind, A grande cidade. Em sua frente há um enorme castelo, o que vc faz?\n";
                echo "1. ir explorar o castelo\n";
                echo "2. espancar um guarda\n";
                $option = readline("");
                switch ($option) {
                    case 1:
                        echo "Voce espanca um guarda até a quase morte, e é cercado por varios outros, " . $cabra->getNome() . ": Bahhhhh.\n";
                        $start = readline("");
                        echo "voce está numa cela no calabouço, e depois de algumas horas, é levado até uma arena em frente ao rei\n";
                        echo "entrando na arena, voce se depara com multiplas pessoas desacordadas, e atrás delas, uma 'Aranha' gigante (é na verdade uma formiga gigante), depois de matar esse bicho, voce vai roubar todo o ouro do rei parapagar suas dividas";
                        $start = readline("");
                        echo "\033[H\033[J";
                        $bicho = new Bicho("'Aranha' Gigante", 30, 12);
                        echo "Combate Simulado!\n";
                        for ($i = 1; $i < 10000; $i++) {
                            echo "Rodada: " . $i . "\n";
                            echo "Bicho: " . $bicho->getBicho() . " | Vida: " . $bicho->getVida() . "\n";
                            echo $cabra->getNome() . " | Vida: " . $cabra->getVida() . "\n";

                            echo $bicho->getBicho() . " toma ";
                            $cabra->cabecada($bicho);
                            echo "de dano.\n";
                            echo $cabra->getNome() . " toma ";
                            $bicho->ataque($cabra);
                            echo "de dano.\n";


                            if ($bicho->getVida() <= 0) {
                                echo "VICTORY!";
                                $start = readline("");
                                break;
                            } else {
                                $start = readline("");
                                echo "\033[H\033[J";
                            }
                            echo "Voce destroi o bicho, rouba o rei e quita sua divida com a máfia de Bullgruhzh.\n";
                            echo <<<'ASCII'
                              
                    ▄▄▄▄▄▄▄▄   ▄▄▄▄▄▄   ▄▄▄  ▄▄▄ 
                    ██▀▀▀▀▀▀   ▀▀██▀▀   ███  ███ 
                    ██           ██     ████████ 
                    ███████      ██     ██ ██ ██ 
                    ██           ██     ██ ▀▀ ██ 
                    ██         ▄▄██▄▄   ██    ██ 
                    ▀▀         ▀▀▀▀▀▀   ▀▀    ▀▀ 
                                                
                                                
                    ASCII;
                        }
                        break;

                    default:
                        echo "VALOR INVALIDO";
                        break;
                }
                break;

                break;

            default:
                echo "VALOR INVALIDO";
                break;
        }

    case 3:
        echo "Voce surge na vila de Twistram, uma pequena vila nevada. Em sua frente há um velho sentado num banco, o que vc faz?\n";
        echo "1. falar com o Mago\n";
        echo "2. chutar essa bola aleatoria\n";
        $option = readline("");
        switch ($option) {
            case 1:
                echo "Mago: Fique um pouco e ouça! Tenho tentado abrir um portal para uma terra de ouro e riquezas. Mas me falta um ingrediente crucial: uma trompa demoníaca." . $cabra->getNome() . ": Bahhhhh.";
                $start = readline("");
                echo "convenientemente, voce acabou de voltar da montanha da Velha-Cabra, então voce tem uma trompa demoníaca sobrando.\n";
                echo "Mago: Fique um pouco e... quero dizer, muito obrigado, grande herói! Vamos abrir esse portal e ficar ricos!\n o portal se abre, e ao passar por ele, voce não se depara com um reino de riquezas, mas com uma pequena ilha em um enorme vazio, no centro dela, uma bola de futebol com a marca de uma mão vermelha, seu arqui-inimigo, Wilson.";
                $start = readline("");
                echo "\033[H\033[J";
                $bicho = new Bicho("Wilson.", 50, 11);
                echo "Combate Simulado!\n";
                for ($i = 1; $i < 10000; $i++) {
                    echo "Rodada: " . $i . "\n";
                    echo "Bicho: " . $bicho->getBicho() . " | Vida: " . $bicho->getVida() . "\n";
                    echo $cabra->getNome() . " | Vida: " . $cabra->getVida() . "\n";

                    echo $bicho->getBicho() . " toma ";
                    $cabra->cabecada($bicho);
                    echo "de dano.\n";
                    echo $cabra->getNome() . " toma ";
                    $bicho->ataque($cabra);
                    echo "de dano.\n";


                    if ($bicho->getVida() <= 0) {
                        echo "VICTORY!";
                        $start = readline("");
                        break;
                    } else {
                        $start = readline("");
                        echo "\033[H\033[J";
                    }
                    echo "Voce finalmente destrói wilson, e senta em seu trono, transcendendo para um plano superior.\n";
                    echo <<<'ASCII'
                              
                    ▄▄▄▄▄▄▄▄   ▄▄▄▄▄▄   ▄▄▄  ▄▄▄ 
                    ██▀▀▀▀▀▀   ▀▀██▀▀   ███  ███ 
                    ██           ██     ████████ 
                    ███████      ██     ██ ██ ██ 
                    ██           ██     ██ ▀▀ ██ 
                    ██         ▄▄██▄▄   ██    ██ 
                    ▀▀         ▀▀▀▀▀▀   ▀▀    ▀▀ 
                                                
                                                
                    ASCII;
                }
                break;

            case 2:
                echo "Voce surge na vila de Twistram, uma pequena vila nevada. Em sua frente há um velho sentado num banco, o que vc faz?\n";
                echo "1. falar com o Mago\n";
                echo "2. chutar essa pedra no chão\n";
                $option = readline("");
                switch ($option) {
                    case 1:
                        echo "Voce chuta a pedra, que ricocheteia e bate na cabeça do Mago" . $cabra->getNome() . ": Bahhhhh.";
                        $start = readline("");
                        echo "O Mago, agora visivelmente bravo, lança um feitiço em voce\n";
                        echo "Mago: a̶̡̮͎̙͂̓̈́͘ͅs̶̗͕̲͒̂̌̿̐͋͐̒ḑ̴̯͉̱̭̬͎̭̉̾̌̂̈́f̶̖̅̀̈́͘̚g̶̫̣̓̔͝h̶͇̯͚͎͓̜͍́͊̂̓̎̈́̀͝j̵̨̣̫̺̮̋͌͗̍k̶͔̝̎͂͛ĺ̶̲̣̬̞̠̪̥ñ̸̢̛͇̪̻̻̐̀͛̈́ͅ\n voce é transportado para uma pequena ilha em um enorme vazio, no centro dela, uma bola de futebol com a marca de uma mão vermelha, seu arqui-inimigo, Wilson.";
                        $start = readline("");
                        echo "\033[H\033[J";
                        $bicho = new Bicho("Wilson.", 50, 11);
                        echo "Combate Simulado!\n";
                        for ($i = 1; $i < 10000; $i++) {
                            echo "Rodada: " . $i . "\n";
                            echo "Bicho: " . $bicho->getBicho() . " | Vida: " . $bicho->getVida() . "\n";
                            echo $cabra->getNome() . " | Vida: " . $cabra->getVida() . "\n";

                            echo $bicho->getBicho() . " toma ";
                            $cabra->cabecada($bicho);
                            echo "de dano.\n";
                            echo $cabra->getNome() . " toma ";
                            $bicho->ataque($cabra);
                            echo "de dano.\n";


                            if ($bicho->getVida() <= 0) {
                                echo "VICTORY!";
                                $start = readline("");
                                break;
                            } else {
                                $start = readline("");
                                echo "\033[H\033[J";
                            }
                            echo "Voce finalmente destrói wilson, e senta em seu trono, transcendendo para um plano superior.\n";
                            echo <<<'ASCII'
                              
                    ▄▄▄▄▄▄▄▄   ▄▄▄▄▄▄   ▄▄▄  ▄▄▄ 
                    ██▀▀▀▀▀▀   ▀▀██▀▀   ███  ███ 
                    ██           ██     ████████ 
                    ███████      ██     ██ ██ ██ 
                    ██           ██     ██ ▀▀ ██ 
                    ██         ▄▄██▄▄   ██    ██ 
                    ▀▀         ▀▀▀▀▀▀   ▀▀    ▀▀ 
                                                
                                                
                    ASCII;
                        }
                        break;

                    default:
                        echo "VALOR INVALIDO";
                        break;
                }
        }
}
