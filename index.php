<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exemplo 06</title>
</head>
<body>
  
    <h1>PHP com POO - Exemplo 06</h1>
    <hr>

<?php
require_once "src/Enums/Situacao.php"; //enum
require_once "src/Models/Cliente.php"; //Superclasse 
require_once "src/Models/PessoaFisica.php"; //Subclasse
require_once "src/Models/PessoaJuridica.php"; //Subclasse


$clientePF = new PessoaFisica("Alvaro Garneiro", "alvarog@gmail.com", 49, "001.125.256-01");
$clientePJ = new PessoaJuridica("Samsung S/A", "contato@samsung.com.br", "32.789.555/000-01", 2019, "Samsung do Brasil S/A")

//Código abaixo dará erro, pois Cliente é uma classe abstrata, portanto, não podemos criar objeto a partir dela.
// $clienteGenerico =  new Cliente("Fulano", "fulano @gmail.com");
//var_dump($clienteGenerico); - mostra que objeto, mas quando colocar abstract na superclasse, a mesma da erro.



?>

 <h2>Relatórios</h2>

 <h3>PF</h3>
 <?=$clientePF->relatorio()?>
 <!-- Acessamos as opções do Enum através do getSituacao()->name -->
 <p><b>Situação:</b> <?=$clientePF->getSituacao()->name?> </p>


 <h3>PJ</h3>
 <?=$clientePJ->relatorio()?>
 <p><b>Situação:</b> <?=$clientePJ->getSituacao()->name?> </p>


</body>
</html>