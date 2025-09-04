<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="desafio3.css">
    <title>Fase 3</title>
</head>
<?php
session_start();
if (!isset($_SESSION['fase1_concluida']) || $_SESSION['fase1_concluida'] !== true){
    header("Location: desafio1.php");
}
    if (!isset($_SESSION['fase2_concluida']) || $_SESSION['fase2_concluida'] !== true){
      header('Location: desafio2.php');
    }

    if (!isset($_SESSION['fase3_concluida']) || $_SESSION['fase3_concluida'] !== true) {
    header("Location: desafio4.php");
}

?>

<body>
    <div class="container">
    <h1>FASE 3</h1>

    <div class="caixa-pergunta">
        <p class="pergunta">Muito bem, você encontrou as velas. A luz delas ilumina o caminho, revelando o quanto o tempo foi cruel com a biblioteca. As prateleiras estão tortas, os livros parecem ter sido jogados ao chão. Em meio à bagunça, você vê uma pequena poça de água perto de uma das paredes, como se um cano tivesse rompido. Onde você irá procurar os fósforos?</p><br>

     <form method="POST" class="form-fase">
        <label class="opcao">
     <input type = "radio" name = "Fase3" value="Secao_livros_americanos" required>  (A) Procurar na seção de livros americanos.
        </label>
     <label class="opcao">
     <input type = "radio" name = "Fase3" value="Recepcao" required> (B) Procurar na recepção.
        </label>
    <label class="opcao">
     <input type = "radio" name = "Fase3" value="Secao_livros_brasileiros" required> (C) Procurar na seção de livros brasileiros.
        </label>
     <label class="opcao">
     <input type = "radio" name = "Fase3" value="Banheiro" required> (D) Procurar no Banheiro.   
        </label>
      <button type="submit" class="btn">Verificar</button>
       
       
    </form>
</div>
<div class="resposta">

<?php

require_once "desafio3_be.php";
$geral = new desafio3_be();
if($_SERVER['REQUEST_METHOD'] === 'POST'){
$resposta = $_POST['Fase3'];
$geral->Resposta3($resposta);
}?>

</div>
</div>
</body>
</html>
