<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="desafio4.css">
    <title>Fase 4</title>
</head> 
<?php
session_start();
?>
<body>
    <div class="container">
    <h1>FASE 4</h1>

    <div class="caixa-pergunta">
        <p class="pergunta">Muito bem, agora com o caminho iluminado, por onde você irá para tentar encontrar o livro do seu avô?</p><br>

    <form method="POST">
        <label class="opcao">
     <input type = "radio" name = "Fase4" value="Direita" required> (A) Ir pela direita
     </label>
     <label class="opcao">
     <input type = "radio" name = "Fase4" value="Esquerda" required> (B) Ir pela Esquerda.
        </label>
     <label class="opcao">
     <input type = "radio" name = "Fase4" value="Fora" required> (C) Ir por fora.
        </label>
     <label class="opcao">
     <input type = "radio" name = "Fase4" value="Livros" required> (D) Ir pela seção de livros brasileiros.
        </label>
     <button type="submit" class="btn">Verificar</button>
    </form>

    
  </div>  

<div class="resposta">
<?php
require_once "desafio4_be.php";

$geral = new desafio4_be();

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $resposta = $_POST['Fase4'];

    $geral-> Resposta4($resposta);
}?>
</div>
</div>
</body>
</html>



