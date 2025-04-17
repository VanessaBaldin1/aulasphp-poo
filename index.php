<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exemplo 05</title>
</head>
<body>
  
    <h1>PHP com POO - Exemplo 05</h1>
    <hr>

<?php
require_once "src/Enums/Situacao.php"; //enum
require_once "src/Models/Cliente.php"; //Superclasse 
require_once "src/Models/PessoaFisica.php"; //Subclasse
require_once "src/Models/PessoaJuridica.php"; //Subclasse


$clientePF = new PessoaFisica("Alvaro Garneiro", "alvarog@gmail.com", 49, "001.125.256-01");
$clientePJ = new PessoaJuridica("Samsung S/A", "contato@samsung.com.br", "32.789.555/000-01", 2019, "Samsung do Brasil S/A")


?>

 <h2>Relatórios</h2>

 <h3>PF</h3>
 <?=$clientePF->relatorio()?>

 <h3>PJ</h3>
 <?=$clientePJ->relatorio()?>



</body>
</html>