<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Fase 3</title>
</head>
<body>
    <h1>FASE 3</h1>

    <div><p><h2>Muito bem você encontrou as velas, agora precisa dos fósforos. Aonde você vai procurar agora?</h2></p></div>

     <form method="POST">
     <input type = "radio" name = "Fase3" value="Secao_livros_americanos" > (A)Procurar na seção de livros americanos.
     <input type = "radio" name = "Fase3" value="Recepcao"> (B)Procurar na recepção.
     <input type = "radio" name = "Fase3" value="Secao_livros_brasileiros"> (C) Procurar na seção de livros brasileiros.
     <input type = "radio" name = "Fase3" value="Banheiro"> (D) Procurar no Banheiro.
     <input type="submit">
       
       
    </form>
</body>
</html>

<?php

require_once "desafio3_be.php";

$geral = new desafio3_be();

if($_SERVER['REQUEST_METHOD'] === 'POST'){

$resposta = $_POST['Fase3'];

  
    $geral->Resposta3($resposta);

}