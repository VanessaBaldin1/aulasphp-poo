<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exemplo 07</title>
</head>
<body>
  
    <h1>PHP com POO - Exemplo 07</h1>
    <hr>

<?php
//Sempre que trabalharmos com namespace, será necessário especificar através do 'use' quais classes/enums/funções serão usadadas.

//Colocar sempre 'use' em cada arquivo quando usar o namespace nas classe virtualmente.

use MeuProjeto\Calculadora;
use MeuProjeto\Models\PessoaFisica;
use MeuProjeto\Models\PessoaJuridica;

// Substituimos TODOS OS REQUIRES anteriores, por um ÚNICO REQUIRE apontando para o autoload
require_once "vendor/autoload.php";


$clientePF = new PessoaFisica("Alvaro Garneiro", "alvarog@gmail.com", 49, "001.125.256-01");
$clientePJ = new PessoaJuridica("Samsung S/A", "contato@samsung.com.br", "32.789.555/000-01", 2019, "Samsung do Brasil S/A");
// Acessando um método estático (ou seja, sem passar por um objeto)

$total = Calculadora::somar(10, 5);
echo $total;



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