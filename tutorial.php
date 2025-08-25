<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tutorial</title>
  <link rel="stylesheet" href="tutorial.css">
</head>
<body>
  <h1>TUTORIAL</h1>

  <div>
    <h3>
      Você sempre lembrava das tardes passadas com seu avô naquela biblioteca, 
      enquanto ele ajeitava o velho relógio de bolso e dizia frases que soavam sem sentido; 
      às vezes ria ao se esconder em lugares improváveis, como quando ficou horas debaixo da cerejeira, 
      certo de que segredos precisavam estar bem guardados; agora, diante da biblioteca abandonada que lhe pertenceu, 
      você sabe que precisa enfrentar uma série de desafios para recuperar o livro que guardava as lembranças mais belas dele
    </h3>
  </div>

  <div>
    <p>
      A biblioteca está trancada, e você precisará da chave para entrar. Verifique os lugares onde ela pode estar escondida.<br><br>
    </p>
    <small>*Para ir para a próxima fase, basta escolher uma das opções abaixo e verifica-la.</small>
  </div>

   
        <form method="POST">

          <label class="opcao">
     <input type = "radio" name = "Tutorial1" value="opcao_1" required> (A)Opção 1
    </label>

    <label class="opcao">
     <input type = "radio" name = "Tutorial1" value="opcao_2" required> (B)Opção 2
    </label>

<label class="opcao">
     <input type = "radio" name = "Tutorial1" value="opcao_3" required> (C)Opção 3
    </label>

    <label class="opcao">
     <input type = "radio" name = "Tutorial1" value="opcao_4" required> (D)Opção 4
    </label>
    
      <input type="submit" value="Verificar">
   </form>

     
   
  

</body>
</html>

<?php

require_once "tutorial_be.php";

$geral = new tutorial_be();

if($_SERVER['REQUEST_METHOD'] === 'POST'){

$resposta = $_POST['Tutorial1'];

  
    $geral->Resposta($resposta);

}

