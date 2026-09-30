<?php

require_once("modelo/Jogo.php");
require_once("modelo/Console.php");
require_once("modelo/Peca.php");
require_once("modelo/Variado.php");

//jogos
$jogo1 = new Jogo();
$jogo1->setNome("Street Fighter II");
$jogo1->setPreco(180);
$jogo1->setAnoLancamento(1991);
$jogo1->setEmpresa("Capcom");
$jogo1->setGenero("Luta");
$jogo1->setTipo("Cartucho");

$jogo2 = new Jogo();
$jogo2->setNome("Chrono Trigger");
$jogo2->setPreco(350);
$jogo2->setAnoLancamento(1995);
$jogo2->setEmpresa("Square");
$jogo2->setGenero("RPG");
$jogo2->setTipo("Cartucho");

$jogo3 = new Jogo();
$jogo3->setNome("Mortal Kombat II");
$jogo3->setPreco(140);
$jogo3->setAnoLancamento(1993);
$jogo3->setEmpresa("Midway");
$jogo3->setGenero("Luta");
$jogo3->setTipo("Cartucho");

$jogo4 = new Jogo();
$jogo4->setNome("Pac-Man");
$jogo4->setPreco(100);
$jogo4->setAnoLancamento(1982);
$jogo4->setEmpresa("Namco");
$jogo4->setGenero("Labirinto");
$jogo4->setTipo("Cartucho");

// consoles
$console1 = new Console();
$console1->setNome("Super Nintendo");
$console1->setPreco(450);
$console1->setCor("Cinza");
$console1->setGeracao("4ª Geração");
$console1->setMarca("Nintendo");

$console2 = new Console();
$console2->setNome("PlayStation 1");
$console2->setPreco(350);
$console2->setCor("Cinza Claro");
$console2->setGeracao("5ª Geração");
$console2->setMarca("Sony");

$console3 = new Console();
$console3->setNome("Mega Drive");
$console3->setPreco(400);
$console3->setCor("Preto");
$console3->setGeracao("4ª Geração");
$console3->setMarca("Sega");

$console4 = new Console();
$console4->setNome("Atari 2600");
$console4->setPreco(600);
$console4->setCor("Preto, detalhes em Madeira");
$console4->setGeracao("2ª Geração");
$console4->setMarca("Atari");

// peças
$peca1 = new Peca();
$peca1->setNome("Controle Clássico");
$peca1->setPreco(45);
$peca1->setMarca("Nintendo");
$peca1->setTipo("Acessório");

$peca2 = new Peca();
$peca2->setNome("Cabo AV");
$peca2->setPreco(25);
$peca2->setMarca("Sony");
$peca2->setTipo("Cabo");

$peca3 = new Peca();
$peca3->setNome("Fonte de Alimentação Mega Drive");
$peca3->setPreco(60);
$peca3->setMarca("Sega");
$peca3->setTipo("Fonte de Alimentação");

$peca4 = new Peca();
$peca4->setNome("Manche de Joystick");
$peca4->setPreco(35);
$peca4->setMarca("Atari");
$peca4->setTipo("Reposição");

// variados
$variado1 = new Variado();
$variado1->setNome("Action Figure Link (The Legend of Zelda)");
$variado1->setPreco(250);
$variado1->setTipo("Action Figure");
$variado1->setFranquia("Zelda");

$variado2 = new Variado();
$variado2->setNome("Caneca Formato Controle Mega Drive");
$variado2->setPreco(65);
$variado2->setTipo("Caneca");
$variado2->setFranquia("Sega");

$variado3 = new Variado();
$variado3->setNome("Chaveiro Cartucho Super Mario World");
$variado3->setPreco(25);
$variado3->setTipo("Chaveiro");
$variado3->setFranquia("Super Mario");

$variado4 = new Variado();
$variado4->setNome("Pelúcia Sonic Classic");
$variado4->setPreco(120);
$variado4->setTipo("Pelúcia");
$variado4->setFranquia("Sonic");

// catálogo inicial
$catalogo = array(
    $jogo1,
    $jogo2,
    $jogo3,
    $jogo4,
    $console1,
    $console2,
    $console3,
    $console4,
    $peca1,
    $peca2,
    $peca3,
    $peca4,
    $variado1,
    $variado2,
    $variado3,
    $variado4
);

$opcao = -1;
$carrinho = array();
$nullDisponivel = true;

//usei ia pra fazer as perguntas abaixo pq eu tava sem muitas ideias
$perguntas = array(

    array("pergunta" => "Qual é o maior planeta do Sistema Solar?", "resposta" => "Júpiter"),
    array("pergunta" => "Em que ano o homem chegou à Lua?", "resposta" => "1969"),
    array("pergunta" => "Qual é a capital da Austrália?", "resposta" => "Canberra"),
    array("pergunta" => "Qual é o maior oceano da Terra?", "resposta" => "Pacífico"),
    array("pergunta" => "Quem escreveu Dom Quixote?", "resposta" => "Miguel de Cervantes"),
    array("pergunta" => "Qual é a raiz quadrada de 144?", "resposta" => "12"),
    array("pergunta" => "Qual é o símbolo químico do ouro?", "resposta" => "Au"),
    array("pergunta" => "Qual planeta é conhecido como Planeta Vermelho?", "resposta" => "Marte"),
    array("pergunta" => "Qual é o país que possui o maior território da América do Sul?", "resposta" => "Brasil"),
    array("pergunta" => "Qual império construiu o Coliseu de Roma?", "resposta" => "Império Romano"),
    array("pergunta" => "Qual é a língua oficial do Brasil?", "resposta" => "Português"),
    array("pergunta" => "Qual é o nome do processo pelo qual as plantas produzem seu próprio alimento?", "resposta" => "Fotossíntese"),
    array("pergunta" => "Qual é o maior órgão do corpo humano?", "resposta" => "Pele"),
    array("pergunta" => "Qual é a unidade básica da vida?", "resposta" => "Célula"),
    array("pergunta" => "Qual foi o primeiro país a utilizar papel-moeda?", "resposta" => "China"),
    array("pergunta" => "Qual civilização construiu Machu Picchu?", "resposta" => "Incas"),
    array("pergunta" => "Qual é o nome da camada da atmosfera onde ocorre a maior parte dos fenômenos meteorológicos?", "resposta" => "Troposfera"),
    array("pergunta" => "Qual é o estreito que separa a Europa da África entre Espanha e Marrocos?", "resposta" => "Estreito de Gibraltar"),
    array("pergunta" => "Qual foi a cidade destruída pela erupção do Vesúvio no ano 79?", "resposta" => "Pompeia"),
    array("pergunta" => "Qual é o nome dado ao movimento da Terra ao redor do Sol?", "resposta" => "Translação")
);

// tambem usei ia pra fazer essa funcao pq eu nao lembrava como faz
function normalizarResposta($texto)
{
    $texto = strtolower($texto); //basicamente muda o conteudo de $texto pra minusculo e usa o ytf-8 pra identificar caracteres como ç ou á

    $acentos = array(
        "á" => "a",
        "à" => "a",
        "ã" => "a",
        "â" => "a",
        "ä" => "a",
        "é" => "e",
        "è" => "e",
        "ê" => "e",
        "ë" => "e",
        "í" => "i",
        "ì" => "i",
        "î" => "i",
        "ï" => "i",
        "ó" => "o",
        "ò" => "o",
        "õ" => "o",
        "ô" => "o",
        "ö" => "o",
        "ú" => "u",
        "ù" => "u",
        "û" => "u",
        "ü" => "u",
        "ç" => "c"
    );
    $texto = strtr($texto, $acentos);//tira os acentos das letras

    return $texto;
}

do {
    print "\n============< MENU >============\n";
    print "| [1] Cadastrar Produto        |\n";
    print "| [2] Mostrar Catálogo         |\n";
    print "| [3] Adicionar ao Carrinho    |\n";
    if ($nullDisponivel) {
        print "| [null] kernel_kaboom.sys     |\n";
    }
    print "| [4] Listar Carrinho          |\n";
    print "| [5] Remover do Carrinho      |\n";
    print "| [6] Finalizar Compra         |\n";
    print "| [0] Encerrar Programa        |\n";
    print "===============<>===============\n";

    $opcao = readline("Escolha uma opção: ");

    switch ($opcao) {
        case 1:
            print "\n========== CADASTRAR PRODUTO ==========\n";
            print "[1] Jogo\n";
            print "[2] Console\n";
            print "[3] Peça\n";
            print "[4] Variado\n";
            print "[0] Voltar\n";

            $tipoProduto = readline("Escolha o tipo de produto: ");

            switch ($tipoProduto) {
                case 1:
                    $jogo = new Jogo;
                    $jogo->setNome(readline("Nome do jogo: "));
                    $jogo->setPreco((int) readline("Preço: "));
                    $jogo->setAnoLancamento((int) readline("Ano de lançamento: "));
                    $jogo->setEmpresa(readline("Empresa: "));
                    $jogo->setGenero(readline("Gênero: "));
                    $jogo->setTipo(readline("Tipo de mídia: "));
                    array_push($catalogo, $jogo);

                    print "\nJogo cadastrado com sucesso!\n";
                    break;

                case 2:
                    $console = new Console();
                    $console->setNome(readline("Nome do console: "));
                    $console->setPreco((int) readline("Preço: "));
                    $console->setGeracao(readline("Geração: "));
                    $console->setMarca(readline("Marca: "));
                    $console->setCor(readline("Cor: "));
                    array_push($catalogo, $console);

                    print "\nConsole cadastrado com sucesso!\n";
                    break;

                case 3:

                    $peca = new Peca();
                    $peca->setNome(readline("Nome da peça: "));
                    $peca->setPreco((int) readline("Preço: "));
                    $peca->setTipo(readline("Tipo da peça: "));
                    $peca->setMarca(readline("Marca: "));
                    array_push($catalogo, $peca);

                    print "\nPeça cadastrada com sucesso!\n";
                    break;

                case 4:
                    $variado = new Variado();
                    $variado->setNome(readline("Nome do produto: "));
                    $variado->setPreco((int) readline("Preço: "));
                    $variado->setTipo(readline("Tipo do produto: "));
                    $variado->setFranquia(readline("Franquia: "));
                    array_push($catalogo, $variado);

                    print "\nProduto variado cadastrado com sucesso!\n";
                    break;

                case 0:
                    print "\nVoltando ao menu...\n";
                    break;

                default:
                    print "\nTipo de produto não identificado.\n";
                    break;
            }
            break;

        case 2:
            print "\n===============< CATÁLOGO >===============\n";
            print "\n---------------< JOGOS >---------------\n";

            foreach ($catalogo as $i => $produto) {
                if ($produto instanceof Jogo) {
                    print "\n[" . ($i + 1) . "] ";
                    print $produto->getNome() . "\n";
                    print "Preço: R$ " . $produto->getPreco() . "\n";
                    print "Ano de lançamento: " . $produto->getAnoLancamento() . "\n";
                    print "Empresa: " . $produto->getEmpresa() . "\n";
                    print "Gênero: " . $produto->getGenero() . "\n";
                    print "Tipo: " . $produto->getTipo() . "\n";
                }
            }

            print "\n-------------< CONSOLES >-------------\n";

            foreach ($catalogo as $i => $produto) {
                if ($produto instanceof Console) {
                    print "\n[" . ($i + 1) . "] ";
                    print $produto->getNome() . "\n";
                    print "Preço: R$ " . $produto->getPreco() . "\n";
                    print "Geração: " . $produto->getGeracao() . "\n";
                    print "Marca: " . $produto->getMarca() . "\n";
                    print "Cor: " . $produto->getCor() . "\n";
                }
            }

            print "\n---------------< PEÇAS >---------------\n";

            foreach ($catalogo as $i => $produto) {
                if ($produto instanceof Peca) {
                    print "\n[" . ($i + 1) . "] ";
                    print $produto->getNome() . "\n";
                    print "Preço: R$ " . $produto->getPreco() . "\n";
                    print "Tipo: " . $produto->getTipo() . "\n";
                    print "Marca: " . $produto->getMarca() . "\n";
                }
            }

            print "\n--------------< VARIADOS >--------------\n";

            foreach ($catalogo as $i => $produto) {

                if ($produto instanceof Variado) {
                    print "\n[" . ($i + 1) . "] ";
                    print $produto->getNome() . "\n";
                    print "Preço: R$ " . $produto->getPreco() . "\n";
                    print "Tipo: " . $produto->getTipo() . "\n";
                    print "Franquia: " . $produto->getFranquia() . "\n";
                }
            }

            print "\n===========================================\n";
            break;

        case 3:
            print "\n========== ADICIONAR AO CARRINHO ==========\n";
            print "\n---------------< JOGOS >---------------\n";

            foreach ($catalogo as $i => $produto) {
                if ($produto instanceof Jogo) {
                    print "[" . ($i + 1) . "] " . $produto->getNome() . " - R$ " . $produto->getPreco() . "\n";
                }
            }

            print "\n-------------< CONSOLES >-------------\n";
            foreach ($catalogo as $i => $produto) {
                if ($produto instanceof Console) {
                    print "[" . ($i + 1) . "] " . $produto->getNome() . " - R$ " . $produto->getPreco() . "\n";
                }
            }

            print "\n---------------< PEÇAS >---------------\n";
            foreach ($catalogo as $i => $produto) {
                if ($produto instanceof Peca) {
                    print "[" . ($i + 1) . "] " . $produto->getNome() . " - R$ " . $produto->getPreco() . "\n";
                }
            }

            print "\n--------------< VARIADOS >--------------\n";
            foreach ($catalogo as $i => $produto) {
                if ($produto instanceof Variado) {
                    print "[" . ($i + 1) . "] " . $produto->getNome() . " - R$ " . $produto->getPreco() . "\n";
                }
            }

            $produtoEscolhido = (int) readline("\nDigite o número do produto que deseja adicionar: ");

            if ($produtoEscolhido >= 1 && $produtoEscolhido <= count($catalogo)) {
                $indice = $produtoEscolhido - 1;
                $carrinho[] = $catalogo[$indice];

                print "\n" . $catalogo[$indice]->getNome() . " foi adicionado ao carrinho!\n";
            } else {
                print "\nProduto não identificado\n";
            }
            break;

        case 4:

            print "\n=============< CARRINHO >=============\n";
            if (count($carrinho) == 0) {
                print "O carrinho está vazio\n";
            } else {
                foreach ($carrinho as $i => $produto) {
                    print "[" . ($i + 1) . "] " . $produto->getNome() . " - R$ " . $produto->getPreco() . "\n";
                }
            }
            print "=======================================\n";
            break;

        case 5:

            print "\n========== REMOVER DO CARRINHO ==========\n";

            if (count($carrinho) == 0) {
                print "O carrinho está vazio.\n";
            } else {
                foreach ($carrinho as $i => $produto) {
                    print "[" . ($i + 1) . "] " . $produto->getNome() . " - R$ " . $produto->getPreco() . "\n";
                }

                $produtoRemover = (int) readline("\nDigite o número do produto que deseja remover: ");
                $indice = $produtoRemover - 1;

                if ($indice >= 0 && $indice < count($carrinho)) {
                    print "\n" . $carrinho[$indice]->getNome() . " foi removido do carrinho.\n";
                    unset($carrinho[$indice]);
                    $carrinho = array_values($carrinho);
                } else {
                    print "\nProduto não identificado\n";
                }
            }
            break;

        case 6:

            print "\n==========< FINALIZAR COMPRA >==========\n";

            if (count($carrinho) == 0) {
                print "O carrinho está vazio. Não há nada para comprar\n";
            } else {
                $total = 0;
                print "Produtos escolhidos:\n\n";
                foreach ($carrinho as $i => $produto) {
                    print "[" . ($i + 1) . "] " . $produto->getNome() . " - R$ " . $produto->getPreco() . "\n";
                    $total += $produto->getPreco();
                }

                print "\nTOTAL: R$ " . $total . "\n";
                print "\n=< Deseja realizar uma nova compra? >=\n";
                print "[1] Sim, quero realizar outra compra\n";
                print "[2] Não, quero encerrar o programa\n";

                $novaCompra = readline("Escolha uma opção: ");

                if ($novaCompra == 1) {
                    $carrinho = array();
                    print "\nIniciando uma nova compra...\n";
                } elseif ($novaCompra == 2) {
                    $opcao = 0;
                    print "\nPrograma encerrado\n";
                } else {
                    print "\nOpção não identificada. Voltando ao menu\n";
                }
            }
            break;

        case 0:
            print "\nPrograma encerrado\n";
            break;

        case "null": //eu n sabia fazer as animacoes como eu queria, entao pedi como fazia pra IA pra ficar bonitinho
            if (!$nullDisponivel) {
                print "\nOpção não identificada. Tente novamente\n";
                break;
            }

            ob_implicit_flush(true); //manda o php imprimir imediatamente oq foi escrito com print ou echo no terminal
            print "\n";
            print "[ SYSTEM ] Preparing internal process";
            flush();

            for ($i = 0; $i < 3; $i++) {
                usleep(500000);
                print ".";
                flush();
            }

            print "\n\n";
            flush();
            usleep(700000);

            print "[ OK ] Process loaded.\n";
            flush();
            usleep(500000);

            print "[ OK ] Memory allocated.\n";
            flush();
            usleep(500000);

            print "[ OK ] System interface found.\n";
            flush();
            usleep(700000);

            print "\nExecuting process:\n\n";
            flush();

            for ($i = 0; $i <= 20; $i++) {
                $porcentagem = $i * 5;
                print "\r[";

                for ($j = 0; $j < $i; $j++) {
                    print "#";
                }

                for ($j = $i; $j < 20; $j++) {
                    print "-";
                }
                print "] " . $porcentagem . "%";
                flush();
                usleep(rand(80000, 300000));
            }

            print "\n\n";
            flush();
            usleep(1000 * 1000);
            
            print "\nReturning to main interface...\n";
            flush();
            usleep(1500000);
            system("clear");

            $pergunta = $perguntas[array_rand($perguntas)];

            $mensagem = "[ SYSTEM ] VOCE NAO DEVERIA ESTAR AQUI";
            print "\n";
            usleep(1000000);

            for ($i = 0; $i < strlen($mensagem); $i++) {
                print $mensagem[$i];
                flush();
                usleep(rand(80000,110000));
            }
            usleep(1000000);

            print "\n[ SYSTEM ] Verification required.\n";
            flush();
            usleep(1000000);

            print "\n[ WARNING ] If the question is not answered correctly, the user's kernel will be terminated.\n";
            flush();
            usleep(2500000);

            print "\nPERGUNTA:\n";
            print $pergunta["pergunta"] . "\n\n";
            print "Você tem 10 segundos para responder.\n";
            flush();

            $tempoLimite = 10;
            $inicio = microtime(true);
            $resposta = null;

            while (true) {
                $tempoRestante = $tempoLimite - floor(microtime(true) - $inicio);
                if ($tempoRestante <= 0) {
                    break;
                }

                $entrada = array(STDIN); //cria um array com a entrada do teclado (o STDIN) pro stream_select conseguir ver se usuario digitou alguma coisa
                $saida = null;
                $erro = nuLl;
                $resultado = stream_select($entrada, $saida, $erro, 1);

                if ($resultado > 0) {
                    $resposta = trim(fgets(STDIN));//le oq o usuario escreveu no teclado ate apertar enter e guarda em $resposta
                    //o trim tira espaços e a quebra de linha que vem junto
                    break;
                }

                /*isso aqui embixo serve pra nao destruir a resposta enquanto o timer tiver rolando
                 embora tenha dado um bug onde o timer meio q anda junto com a resposta */

                print "\033[s"; //salva a posivao atual do cursor
                print "\033[1A";//sobe o cursor 1 linha 
                print "\033[2K";//apaga a linha q o cursor tava
                print "Tempo restante: " . ($tempoRestante - 1) . " segundos";
                print "\033[u"; //volta pra posicao salva pelo /033[s
                flush();
            }
            system("clear");
            print "\n";

            if ($resposta === null) {
                print "⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣀⣠⣤⣄⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀\n";
                print "⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢠⣴⣶⢶⣦⣤⡾⠋⠑⠁⣀⡙⢷⡤⠖⠲⠶⣤⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀\n";
                print "⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣀⣠⣶⠶⠟⢳⣟⢙⡵⢾⣻⣯⣷⣶⣦⣌⠉⠛⠿⢿⣦⣀⠀⠈⠹⣷⡒⠒⠶⣤⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀\n";
                print "⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⡶⠟⡽⠋⢀⣴⣶⢿⡏⠉⢃⣬⡟⠁⠀⠹⠀⢽⣿⣷⠞⠋⠉⢉⣷⠦⣤⠿⣍⣗⣦⠈⢻⣤⣤⣤⣄⡀⠀⠀⠀⠀⠀⠀\n";
                print "⠀⠀⠀⠀⠀⣠⣴⣾⡻⡟⣠⠦⣤⡀⣉⡾⠉⣠⡴⣿⣇⠀⠁⣀⣀⡟⠙⢿⣇⡈⠇⠀⠀⠈⡿⢮⣉⠉⠉⠙⣾⢦⡈⡿⠡⣤⡈⠻⣦⡀⠀⠀⠀⠀\n";
                print "⠀⠀⠀⠀⣾⣯⣽⡟⢳⡏⠹⠄⠀⡞⠁⠀⠾⠉⢳⡟⢉⣬⣿⠁⠈⠃⠀⠉⠀⣻⣤⠀⠀⠀⠀⠰⠏⠿⠀⣠⢯⣀⠀⠀⠀⣈⣿⣄⣿⠻⣦⡀⠀⠀\n";
                print "⠀⠀⢠⡾⡿⠿⠀⣥⠌⢁⣰⣤⡼⠛⠒⠀⠀⠀⠈⠳⠍⠳⣹⠆⠀⠀⠀⠀⠀⠈⢙⡆⠀⠀⣀⠀⠀⠀⠀⠁⠀⢸⡗⢲⣦⣬⠚⠋⠉⣆⠈⣷⡀⠀\n";
                print "⠀⠀⣿⡇⢠⡶⠀⣷⣤⣾⠇⠉⢸⡯⠀⠀⠀⠀⡴⠖⠀⠈⠻⣀⣀⡄⠀⠀⢀⣀⢉⠀⠀⠛⠉⣹⣦⡀⠀⠀⠐⠋⢩⣛⡃⠉⠉⣻⣀⡼⡿⠋⢻⣆\n";
                print "⢀⣼⣿⣿⣾⣧⣴⠏⠀⠀⠀⠀⠺⣄⣀⠀⢀⣈⡳⣄⠤⢄⣴⡿⠃⠀⣠⠗⠿⠓⠶⠛⣶⣤⣀⡀⠘⠯⢤⣚⢳⣤⣄⠨⠿⢦⣄⠀⠈⡷⠒⣄⢐⣿\n";
                print "⢸⣿⣟⠙⢛⣧⢿⣄⠀⠀⠀⠀⢀⡬⠉⢱⣿⠁⠀⢀⣤⠟⠙⢿⣀⣠⠙⠶⠶⢤⠲⣤⣯⣘⠋⠀⠀⠀⠀⢹⠹⠿⣿⣀⢀⣀⣽⠙⠛⠑⣶⣿⣿⠋\n";
                print "⠀⣿⡿⡍⣹⡇⣠⣾⣿⠀⣀⡀⣿⡟⣀⠾⢯⡉⢠⡿⠏⣦⣄⢀⣉⣥⡖⠀⠀⢸⡆⠀⠀⢙⡓⠶⢦⣴⠖⠋⠀⠀⠀⣟⣿⠋⠐⠒⣶⢛⣿⡇⢸⠇\n";
                print "⠀⠿⣷⣾⣿⣻⡾⠓⠊⠉⠁⠀⠈⠉⠁⢠⡄⢠⡄⠀⢀⣼⣿⣿⡿⢻⡟⣶⣶⣿⣷⣤⣤⡾⣷⡀⣠⡏⠀⠀⢀⠀⠀⢹⡇⠀⣀⠒⠛⠰⣿⣾⠟⠀\n";
                print "⠀⠀⠈⠻⣯⣬⣳⠶⣞⠀⠀⡀⠀⠀⠀⠈⠛⠚⠋⠙⠛⢿⣿⣿⣧⢀⢸⢡⢹⡎⠙⣿⣿⣧⡽⠛⠋⠀⠀⠀⠈⠓⠞⡋⠑⣶⠿⠀⠚⡟⠛⠁⠀⠀\n";
                print "⠀⠀⠀⠀⠈⠹⣄⡀⠘⠲⠖⠳⡴⠂⠀⠀⠈⣿⣀⡀⠶⢾⠿⣿⣿⢸⢸⢸⢸⡇⠀⣾⣿⠏⠁⠀⣄⠀⣄⠀⣠⠄⠀⠉⡓⠉⠀⠀⣶⡇⠀⠀⠀⠀\n";
                print "⠀⠀⠀⠀⠀⠀⠈⠛⠶⠶⠶⣶⠀⠀⠀⠀⢀⡀⠉⠙⠀⠀⠀⣿⣿⢸⢸⢸⢸⡇⠀⡇⣿⠀⠀⠀⠈⠋⠉⠉⠉⠀⠀⣰⡟⠶⠾⠿⠋⠀⠀⠀⠀⠀\n";
                print "⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠛⠲⠶⠚⠻⣤⣀⡀⣀⣠⣄⣿⣿⢸⠀⢸⢸⡇⡿⡇⣿⣄⣀⠀⠀⠀⣰⢤⣀⣠⣾⠟⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀\n";
                print "⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠉⠉⠉⠀⠀⣿⣿⢸⠀⢸⢸⡇⣥⡇⣿⠁⠉⠓⠒⠛⠁⠀⠈⠉⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀\n";
                print "⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢠⣿⡏⠛⡆⢸⠈⡇⣿⡇⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀\n";
                print "⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣀⣼⡿⢣⢀⡇⠀⠀⢻⣿⣿⣿⠀⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀\n";
                print "⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⡤⣾⣫⢯⣽⡁⢸⣼⣷⠀⢸⣾⢿⣿⣿⡟⣭⣝⡖⠦⣄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀\n";
                print "⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⣿⣀⡿⣿⣾⣿⠷⢾⣿⣿⣿⣶⣿⣾⣿⣿⣧⡀⠼⠓⣄⢸⣷⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀\n";
                print "⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠸⢺⠉⢿⣿⢻⣟⣿⠶⠄⠃⠀⠈⠳⢦⡈⠃⠀⢷⡄⠰⣾⣏⢼⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀\n";
                print "⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠘⢷⡼⣯⡎⠁⢽⡁⢀⡀⣄⣀⣴⠼⢯⣀⣨⣿⣁⡀⣭⣤⡿⠛⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀\n";
                print "⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠑⢮⣽⣷⣶⡉⢿⣶⣜⣿⣥⣴⣄⡉⣽⣾⣿⡿⠗⠉⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀\n";
                print "⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⢿⣿⢿⣿⡿⠿⠿⣿⣿⣏⣿⣿⣿⣿⣿⣧⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀\n";
                print "⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⣴⣿⣿⣧⣾⣿⣧⣤⣤⣍⡀⠹⣠⣴⡿⢿⣯⣿⣿⣷⣦⣄⣀⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀\n";
                print "⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⣴⣶⣟⣿⣟⣿⣻⣿⣿⢛⣿⣽⣿⣿⣻⣶⢿⣿⣿⣾⣿⣾⣿⣷⣌⣙⣿⢻⡆⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀\n";
                print "            KERNEL WAS SUCCESFULLY TERMINATED\n";
                $opcao = 0;

            } elseif (normalizarResposta($resposta) == normalizarResposta($pergunta["resposta"])) {
                print "\n[ OK ] Verification accepted.\n";
                usleep(1000000);
                print "[ SYSTEM ] Returning to main interface...\n";
                usleep(1000000);

                $nullDisponivel = false;
                system("clear");
                $mensagem = "[ SYSTEM ] VOCE NAO VIU NADA...";
                print "\n";
                usleep(1000000);

                for ($i = 0; $i < strlen($mensagem); $i++) {
                    print $mensagem[$i];
                    flush();
                    usleep(rand(80000,110000));
                }
                usleep(1500000);
                system("clear");
                
            } else {
                print "\n[ ERROR ] Incorrect response.\n";
                usleep(1000000);

                print "⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣀⣠⣤⣄⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀\n";
                print "⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢠⣴⣶⢶⣦⣤⡾⠋⠑⠁⣀⡙⢷⡤⠖⠲⠶⣤⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀\n";
                print "⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣀⣠⣶⠶⠟⢳⣟⢙⡵⢾⣻⣯⣷⣶⣦⣌⠉⠛⠿⢿⣦⣀⠀⠈⠹⣷⡒⠒⠶⣤⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀\n";
                print "⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⡶⠟⡽⠋⢀⣴⣶⢿⡏⠉⢃⣬⡟⠁⠀⠹⠀⢽⣿⣷⠞⠋⠉⢉⣷⠦⣤⠿⣍⣗⣦⠈⢻⣤⣤⣤⣄⡀⠀⠀⠀⠀⠀⠀\n";
                print "⠀⠀⠀⠀⠀⣠⣴⣾⡻⡟⣠⠦⣤⡀⣉⡾⠉⣠⡴⣿⣇⠀⠁⣀⣀⡟⠙⢿⣇⡈⠇⠀⠀⠈⡿⢮⣉⠉⠉⠙⣾⢦⡈⡿⠡⣤⡈⠻⣦⡀⠀⠀⠀⠀\n";
                print "⠀⠀⠀⠀⣾⣯⣽⡟⢳⡏⠹⠄⠀⡞⠁⠀⠾⠉⢳⡟⢉⣬⣿⠁⠈⠃⠀⠉⠀⣻⣤⠀⠀⠀⠀⠰⠏⠿⠀⣠⢯⣀⠀⠀⠀⣈⣿⣄⣿⠻⣦⡀⠀⠀\n";
                print "⠀⠀⢠⡾⡿⠿⠀⣥⠌⢁⣰⣤⡼⠛⠒⠀⠀⠀⠈⠳⠍⠳⣹⠆⠀⠀⠀⠀⠀⠈⢙⡆⠀⠀⣀⠀⠀⠀⠀⠁⠀⢸⡗⢲⣦⣬⠚⠋⠉⣆⠈⣷⡀⠀\n";
                print "⠀⠀⣿⡇⢠⡶⠀⣷⣤⣾⠇⠉⢸⡯⠀⠀⠀⠀⡴⠖⠀⠈⠻⣀⣀⡄⠀⠀⢀⣀⢉⠀⠀⠛⠉⣹⣦⡀⠀⠀⠐⠋⢩⣛⡃⠉⠉⣻⣀⡼⡿⠋⢻⣆\n";
                print "⢀⣼⣿⣿⣾⣧⣴⠏⠀⠀⠀⠀⠺⣄⣀⠀⢀⣈⡳⣄⠤⢄⣴⡿⠃⠀⣠⠗⠿⠓⠶⠛⣶⣤⣀⡀⠘⠯⢤⣚⢳⣤⣄⠨⠿⢦⣄⠀⠈⡷⠒⣄⢐⣿\n";
                print "⢸⣿⣟⠙⢛⣧⢿⣄⠀⠀⠀⠀⢀⡬⠉⢱⣿⠁⠀⢀⣤⠟⠙⢿⣀⣠⠙⠶⠶⢤⠲⣤⣯⣘⠋⠀⠀⠀⠀⢹⠹⠿⣿⣀⢀⣀⣽⠙⠛⠑⣶⣿⣿⠋\n";
                print "⠀⣿⡿⡍⣹⡇⣠⣾⣿⠀⣀⡀⣿⡟⣀⠾⢯⡉⢠⡿⠏⣦⣄⢀⣉⣥⡖⠀⠀⢸⡆⠀⠀⢙⡓⠶⢦⣴⠖⠋⠀⠀⠀⣟⣿⠋⠐⠒⣶⢛⣿⡇⢸⠇\n";
                print "⠀⠿⣷⣾⣿⣻⡾⠓⠊⠉⠁⠀⠈⠉⠁⢠⡄⢠⡄⠀⢀⣼⣿⣿⡿⢻⡟⣶⣶⣿⣷⣤⣤⡾⣷⡀⣠⡏⠀⠀⢀⠀⠀⢹⡇⠀⣀⠒⠛⠰⣿⣾⠟⠀\n";
                print "⠀⠀⠈⠻⣯⣬⣳⠶⣞⠀⠀⡀⠀⠀⠀⠈⠛⠚⠋⠙⠛⢿⣿⣿⣧⢀⢸⢡⢹⡎⠙⣿⣿⣧⡽⠛⠋⠀⠀⠀⠈⠓⠞⡋⠑⣶⠿⠀⠚⡟⠛⠁⠀⠀\n";
                print "⠀⠀⠀⠀⠈⠹⣄⡀⠘⠲⠖⠳⡴⠂⠀⠀⠈⣿⣀⡀⠶⢾⠿⣿⣿⢸⢸⢸⢸⡇⠀⣾⣿⠏⠁⠀⣄⠀⣄⠀⣠⠄⠀⠉⡓⠉⠀⠀⣶⡇⠀⠀⠀⠀\n";
                print "⠀⠀⠀⠀⠀⠀⠈⠛⠶⠶⠶⣶⠀⠀⠀⠀⢀⡀⠉⠙⠀⠀⠀⣿⣿⢸⢸⢸⢸⡇⠀⡇⣿⠀⠀⠀⠈⠋⠉⠉⠉⠀⠀⣰⡟⠶⠾⠿⠋⠀⠀⠀⠀⠀\n";
                print "⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠈⠛⠲⠶⠚⠻⣤⣀⡀⣀⣠⣄⣿⣿⢸⠀⢸⢸⡇⡿⡇⣿⣄⣀⠀⠀⠀⣰⢤⣀⣠⣾⠟⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀\n";
                print "⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠉⠉⠉⠀⠀⣿⣿⢸⠀⢸⢸⡇⣥⡇⣿⠁⠉⠓⠒⠛⠁⠀⠈⠉⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀\n";
                print "⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢠⣿⡏⠛⡆⢸⠈⡇⣿⡇⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀\n";
                print "⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢀⣀⣼⡿⢣⢀⡇⠀⠀⢻⣿⣿⣿⠀⣀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀\n";
                print "⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⡤⣾⣫⢯⣽⡁⢸⣼⣷⠀⢸⣾⢿⣿⣿⡟⣭⣝⡖⠦⣄⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀\n";
                print "⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⢸⣿⣀⡿⣿⣾⣿⠷⢾⣿⣿⣿⣶⣿⣾⣿⣿⣧⡀⠼⠓⣄⢸⣷⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀\n";
                print "⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠸⢺⠉⢿⣿⢻⣟⣿⠶⠄⠃⠀⠈⠳⢦⡈⠃⠀⢷⡄⠰⣾⣏⢼⣿⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀\n";
                print "⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠘⢷⡼⣯⡎⠁⢽⡁⢀⡀⣄⣀⣴⠼⢯⣀⣨⣿⣁⡀⣭⣤⡿⠛⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀\n";
                print "⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠑⢮⣽⣷⣶⡉⢿⣶⣜⣿⣥⣴⣄⡉⣽⣾⣿⡿⠗⠉⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀\n";
                print "⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⢿⣿⢿⣿⡿⠿⠿⣿⣿⣏⣿⣿⣿⣿⣿⣧⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀\n";
                print "⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⣴⣿⣿⣧⣾⣿⣧⣤⣤⣍⡀⠹⣠⣴⡿⢿⣯⣿⣿⣷⣦⣄⣀⡀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀\n";
                print "⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⣠⣴⣶⣟⣿⣟⣿⣻⣿⣿⢛⣿⣽⣿⣿⣻⣶⢿⣿⣿⣾⣿⣾⣿⣷⣌⣙⣿⢻⡆⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀\n";
                print "            KERNEL WAS SUCCESFULLY TERMINATED\n";
                $opcao = 0;
            }
            break;

        default:
            print "\nOpção não identificada. Tente novamente\n";
            break;
    }
} while ($opcao != 0);
