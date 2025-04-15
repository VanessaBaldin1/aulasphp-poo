<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exemplo 03</title>
</head>
<body>
  
    <h1>PHP com POO - Exemplo 03</h1>
    <hr>

<?php
//Carregando/importando a classe
require_once "src/Cliente.php";

// Criando objeto/instância da classe
$clienteA = new Cliente("Beto Carrero", 75, "betocarrero@gmail.com");
$clienteB = new Cliente("Roberto Carlos", 80, "robertocarlos@gmail.com");

?>

<h2>Acessando /lendo os dados dos objetos</h2>
<ul>
  <li><b>Nome:</b><?=$clienteA->getNome()?></li>
  <li><b>Idade:</b><?=$clienteA->getIdade()?></li>
  <li><b>Email:</b><?=$clienteA->getEmail()?></li>
</ul>

<ul>
  <li><b>Nome:</b><?=$clienteB->getNome()?></li>
  <li><b>Idade:</b><?=$clienteB->getIdade()?></li>
  <li><b>Email:</b><?=$clienteB->getEmail()?></li>
</ul>

<h2>Testes de acesso ao recursos da classe através do objeto</h2>
<pre><?=var_dump($clienteA, $clienteB)?></pre>

</body>
</html>