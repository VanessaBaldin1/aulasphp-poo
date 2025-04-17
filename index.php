<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exemplo 04</title>
</head>
<body>
  
    <h1>PHP com POO - Exemplo 04</h1>
    <hr>

<?php
require_once "src/Situacao.php"; //enum
require_once "src/Cliente.php"; //Superclasse 
require_once "src/PessoaFisica.php"; //Subclasse
require_once "src/PessoaJuridica.php"; //Subclasse


$clientePF = new PessoaFisica("Alvaro Garneiro", "alvarog@gmail.com", 49, "001.125.256-01");
$clientePJ = new PessoaJuridica("Samsung S/A", "contato@samsung.com.br", "32.789.555/000-01", 2019, "Samsung do Brasil S/A")


?>

<!-- verificação do objeto -->
<pre><?=var_dump($clientePF, $clientePJ)?></pre>



</body>
</html>