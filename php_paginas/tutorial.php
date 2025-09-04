<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tutorial</title>
  <link rel="stylesheet" href="../css/tutorial.css">
</head>
<body>
  <h1>TUTORIAL</h1>

  <div class="texto">
    <h3>
     O jogo funcionará dessa forma: escolha uma das opções e veja se você acertou.
    </h3>
  </div>

  <div class="texto">
    <p>
    OBS: *Sua pontuação será baseada conforme você acertar as perguntas. Se você acertar de primeira, você ganhará um certo valor de pontos. Já se você errar, descontará um certo valor de pontos.</p>
  
  </div>  <small class="instrucao">*Para ir para a próxima fase, basta escolher uma das opções abaixo e verifica-la.</small>

        <form method="POST" class="opcoes">

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
    
      <input class="btn" type="submit" value="Verificar">
   </form>

     
   
<div class="resposta"> 
<?php

require_once "../php_be/tutorial_be.php";

$geral = new tutorial_be();

if($_SERVER['REQUEST_METHOD'] === 'POST'){

  

$resposta = $_POST['Tutorial1'];

  
    $geral->Resposta($resposta);

}
?></div> 


</body>
</html>



