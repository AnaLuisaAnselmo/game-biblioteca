<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="desafio2.css">

    <title>FASE 2</title>
</head>
<?php
session_start();
?>
<body>

<div class="container">
  <h1>FASE 2</h1>

    <div class="caixa-pergunta">
      <p class="pergunta">
        Parabéns você achou a chave, agora consegue entrar. Após entrar na biblioteca abandonada, você percebe que não enxerga nada, você terá que procurar por velas e fósforos. Aonde você vai procurar?</p><br>

  <form method="POST" class="form-fase">
    <label class="opcao">
     <input type = "radio" name = "Fase2" value="americano" required> (A) Procurar na seção de livros americanos.
     </label>
     <label class="opcao">
     <input type = "radio" name = "Fase2" value="recepcao" required> (B) Procurar na recepção.
      </label>
      <label class="opcao">
     <input type = "radio" name = "Fase2" value="brasileiro" required> (C) Procurar na seção de livros brasileiros.
      </label>
      <label class="opcao">
     <input type = "radio" name = "Fase2" value="banheiro" required> (D) Procurar no Banheiro.
      </label>

      <button type="submit" class="btn">Verificar</button>
           </form>
</div>

<div class="resposta">
<?php
require_once "desafio2_be.php";
if ($_SERVER['REQUEST_METHOD'] === "POST") {
      $geral = new desafio2_be();
      $resposta = $_POST['Fase2'];
      $geral->Resposta2($resposta);

} ?>
</div>       

 </div>    
 
</body>
</html>  