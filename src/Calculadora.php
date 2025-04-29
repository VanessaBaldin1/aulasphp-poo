<?php 
namespace MeuProjeto;
abstract class Calculadora //Metodos static podemos acessar direto sem objeto classe:: function;
{
  public static function somar(float $valor1, float $valor2): float
  {
    return $valor1 + $valor2;
  }

}