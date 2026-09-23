<?php

require_once("modelo/Jogo.php");
require_once("modelo/Console.php");
require_once("modelo/Peca.php");
require_once("modelo/Variados.php");
//jogos
$jogo1 = new Jogo();
$jogo1->setNome("Street Fighter II");
$jogo1->setPreco(180.00);
$jogo1->setAnoLancamento(1991);
$jogo1->setEmpresa("Capcom");
$jogo1->setGenero("Luta");
$jogo1->setTipo("Cartucho");

$jogo2 = new Jogo();
$jogo2->setNome("Chrono Trigger");
$jogo2->setPreco(350.00);
$jogo2->setAnoLancamento(1995);
$jogo2->setEmpresa("Square");
$jogo2->setGenero("RPG");
$jogo2->setTipo("Cartucho");

$jogo3 = new Jogo();
$jogo3->setNome("Mortal Kombat II");
$jogo3->setPreco(140.00);
$jogo3->setAnoLancamento(1993);
$jogo3->setEmpresa("Midway");
$jogo3->setGenero("Luta");
$jogo3->setTipo("Cartucho");

$jogo4 = new Jogo();
$jogo4->setNome("Pac-Man");
$jogo4->setPreco(100.00);
$jogo4->setAnoLancamento(1982);
$jogo4->setEmpresa("Namco");
$jogo4->setGenero("Labirinto");
$jogo4->setTipo("Cartucho");

//consoles
$console1 = new Console();
$console1->setNome("Super Nintendo");
$console1->setPreco(450.00);
$console1->setCor("Cinza");
$console1->setGeracao("4ª Geração");
$console1->setMarca("Nintendo");

$console2 = new Console();
$console2->setNome("PlayStation 1");
$console2->setPreco(350.00);
$console2->setCor("Cinza Claro");
$console2->setGeracao("5ª Geração");
$console2->setMarca("Sony");

$console3 = new Console();
$console3->setNome("Mega Drive");
$console3->setPreco(400.00);
$console3->setCor("Preto");
$console3->setGeracao("4ª Geração");
$console3->setMarca("Sega");

$console4 = new Console();
$console4->setNome("Atari 2600");
$console4->setPreco(600.00);
$console4->setCor("Preto, detalhes em Madeira");
$console4->setGeracao("2ª Geração");
$console4->setMarca("Atari");

//peças
$peca1 = new Peca();
$peca1->setNome("Controle Clássico");
$peca1->setPreco(45.00);
$peca1->setMarca("Nintendo");
$peca1->setTipo("Acessório");

$peca2 = new Peca();
$peca2->setNome("Cabo AV");
$peca2->setPreco(25.00);
$peca2->setMarca("Sony");
$peca2->setTipo("Cabo");

$peca3 = new Peca();
$peca3->setNome("Fonte de Alimentação Mega Drive");
$peca3->setPreco(60.00);
$peca3->setMarca("Sega");
$peca3->setTipo("Fonte de Alimentação");

$peca4 = new Peca();
$peca4->setNome("Manche de Joystick");
$peca4->setPreco(35.00);
$peca4->setMarca("Atari");
$peca4->setTipo("Reposição");

//variados
$variado1 = new Variado();
$variado1->setNome("Action Figure Link (The Legend of Zelda)");
$variado1->setPreco(250.00);
$variado1->setTipo("Action Figure");
$variado1->setFranquia("Zelda");

$variado2 = new Variado();
$variado2->setNome("Caneca Formato Controle Mega Drive");
$variado2->setPreco(65.00);
$variado2->setTipo("Caneca");
$variado2->setFranquia("Sega");

$variado3 = new Variado();
$variado3->setNome("Chaveiro Cartucho Super Mario World");
$variado3->setPreco(25.00);
$variado3->setTipo("Chaveiro");
$variado3->setFranquia("Super Mario");

$variado4 = new Variado();
$variado4->setNome("Pelúcia Sonic Classic");
$variado4->setPreco(120.00);
$variado4->setTipo("Pelúcia");
$variado4->setFranquia("Sonic");

