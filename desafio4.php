<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fase 4</title>
</head>
<body>
    <h1>FASE 4</h1>

    <div>
        <h2>Muito bem, agora com o caminho iluminado, por onde você irá para tentar encontrar o livro do seu avô?</h2>
</div>

    <form method="POST">
     <input type = "radio" name = "Fase4" value="Direita"> (A)Ir pela direita
     <input type = "radio" name = "Fase4" value="Esquerda"> (B)Ir pela Esquerda.
     <input type = "radio" name = "Fase4" value="Fora"> (C)Ir por fora.
     <input type = "radio" name = "Fase4" value="Livros"> (D)Ir pela seção de livros brasileiros.
     <input type= "submit">
           </form>

    
    
</body>
</html>

<?php
require_once "desafio4_be.php";

$geral = new desafio4_be();

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $resposta = $_POST['Fase4'];

    $geral-> Resposta4($resposta);
}





