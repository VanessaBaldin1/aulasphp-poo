# Exemplos de programação orientada a objetos usando PHP

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


