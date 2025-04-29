# Exemplos de programação orientada a objetos usando PHP

## 07_autoload-de-classes-usando-composer

- Download e instalação do Composer na máquina
- Criação e configuração do `composer.json` para utilização do autoload de acordo com a `psr-4`
- Execução do comando `composer dumpautoload` via CLI para gerar a pasta `vendor` e o `autoload.php`
- Substituição de todos os `requires` individuais por um único apontando para o autoload
- Exemplo de uso de uma classe abstrata(que não pode ser instaciada) e método `static` (que pode ser acessado diretamente da classe, sem objetivo). Exemplo:
```php
Calculadora::somar();
```

## 06_namespaces

- Reorganização virtual/lógica usando namespace (espaços nomeados)
- Uso do `use` para simplificar (atalho) o acesso dos recursos do namespace

**Exemplo sem `use`**

```php

$objeto = new NomeDoNameSpace\NomeDaPasta\NomeDaClasse();
```
**Exemplo com `use`**
```php
use NomeDoNameSpace\NomeDaPasta;
$objeto =  new NomeDaClasse();
```

## 05_polimorfismo

- Métodos de mesma assinatura (nome, parâmetros, retorno) mas com comportamentos diferentes
- [Herança] Indicação de classes abstrata e final
- [Enumeração] Uso da propriedade `name` para acessar as opções do `enum`


## 04_heranca-e-enumeracoes

- Superclasse e subclasse
- Readequação de propriedades
- Ajustes nas chamadas de construtor, usando `parent` para acessar construtor da superclasse
- Uso de enumeração para criar um tipo de dado com valores customizados
- Alteração de visibilidade para protected em um método da superclasse, permitindo assim o acesso a partir da subclasse.
- Organização das pastas e arquivos em `src`


## 03_encapsulamento-e-metodo-construtor

- Implementação do método construtor obrigando a inicialização do objeto com dados provenientes de parâmetros.
- Chamada dos setters a partir do construtor.
- Mudança de visibilidade dos setters para privado.


## 02_encapsulamento-para-visibilidade

- Utilização de diferentes visibilidades (privates e public)
- Controle da forma como os dados acessados (getters) e modificados (setters)
- Com esta abordagem, podemos esconder detalhesde implementação de classe
- Podemos atribuir diferentes lógicas de negócio (validações, sanitizações etec)


## 01_abstracao-usando-classes-atributos-metodos

- Pasta `src` para organização das classes
- Criação da classe `Cliente.php` *(sempre iniciando com Letra maiúscula)*
    - Definição de atributos contendo:
      - tipo de visibilidade (nos exemplos, usamos `public`)
      - tipo de dados
      - nome do atributo
    -Definição de métodos contendo:
      - tipo visibilidade (nos exemplos, usamos `public`)
      - nome do método
      - detalhes adicionais (parâmetros, tipo de retorno etc)
      - Uso do `$this` para acessar 
- Na `index.php`:
 - Uso do `require` para referenciar a classe `Cliente`
 - Criação dos objetos `$clienteA` e `$clienteB` a partir da classe usando `new Cliente()`
 - Atribuição de dados de forma direta aos atributos usando
 `$nomeObjeto->atributo`
 - Chamada de métodos através do objeto usando `$nomeObjeto->metodo()`


