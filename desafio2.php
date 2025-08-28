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
        Parabéns, você encontrou a chave. Ao entrar na biblioteca, o cheiro de mofo toma conta do ar. Livros estão jogados no chão, e boa parte deles destruídos, exceto alguns, como os de culinária e estrangeiros. Mas, está muito escuro para enxergar algo. Onde você irá procurar iluminação?</p><br>

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