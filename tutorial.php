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
      *Para você ir para próxima fase, basta escolher uma das opções abaixo.
    </p>
  </div>

   
        <form method="POST">
     <input type = "radio" name = "Tutorial1" value="opcao_1" > (A)Opção 1
     <input type = "radio" name = "Tutorial1" value="opcao_2" > (B)Opção 2
     <input type = "radio" name = "Tutorial1" value="opcao_3" > (C)Opção 3
     <input type = "radio" name = "Tutorial1" value="opcao_4" > (D)Opção 4
      <input type="submit">
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

