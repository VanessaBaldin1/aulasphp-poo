<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exemplo 02</title>
</head>
<body>
  
    <h1>PHP com POO - Exemplo 02</h1>
    <hr>

<?php
//Carregando/importando a classe
require_once "src/Cliente.php";

// Criando objeto/instância da classe
$clienteA = new Cliente();
$clienteB = new Cliente();

//Atribuindo valores para os atributos(diferente a forma de acessar pois são privados)
$clienteA->setNome("Beto Carrero");
$clienteA->setIdade(75);
$clienteA->setEmail("betocarrero@gmail.com");

$clienteB->setNome("Roberto Carlos");
$clienteB->setIdade(80);
$clienteB->setEmail("robertocarlos@gmail.com");

?>

<h2>Acessando /lendo os dados dos objetos</h2>



<h2>Testes de acesso ao recursos da classe através do objeto</h2>
<pre><?=var_dump($clienteA, $clienteB)?></pre>

</body>
</html>