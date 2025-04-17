<?php
class Cliente
{
  
  private string $nome;
  private string $email;
  private Situacao $situacao; //nova propriedade de tipo situação enum

  //Método CONSTRUTOR (sempre é executado automaticamente ao criar objeto)
  //Definindo a situação INATIVO como valor padrão para o parâmetro situação no construtor.

  public function __construct(string $nome, string $email, Situacao $situacao = Situacao::INATIVO) //novo parametro já com valor pré-definido
  {
    $this->setNome($nome);
    
    $this->setEmail($email);

    $this->setSituacao($situacao); //chamada do setter

  }

  public function relatorio():string {
    return "<div>
       <h4> {$this->getNome()} </h4>
       <p> <b>Contato:</b>  {$this->getEmail()}</p>
    </div>";

  }


  //Visibilidade protegida: desta forma, este método pode ser usado aqui em Cliente(superclasse) e também nas subclasses.
  //O acesso externo (no nosso caso, em index) continua sendo bloqueado.
 protected function setSituacao(Situacao $situacao): void{  //setter e getter
    $this->situacao = $situacao;

 }


 public function getSituacao():Situacao {
    return $this->situacao;
 }



  public function setNome(string $nome): void 
  {
   $this->nome = $nome;

  }
 
 
     
  public function setEmail(string $email): void 
  {
    if( !filter_var($email, FILTER_VALIDATE_EMAIL)){
      throw new InvalidArgumentException("E-mail inválido!");
    }
    $this->email = $email;
    
  }

  public function getNome(): string 
  {
   
   return $this->nome;
  }

 

  public function getEmail(): string 
  {
  
   return $this->email;

  }


}
