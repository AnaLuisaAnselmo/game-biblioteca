<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/desafio4.css">
    <title>Fase 4</title>
</head> 
<?php
session_start();

if (!isset($_SESSION['fase1_concluida']) || $_SESSION['fase1_concluida'] !== true){
    header("Location: desafio1.php");
}
    if (!isset($_SESSION['fase2_concluida']) || $_SESSION['fase2_concluida'] !== true){
      header('Location: desafio2.php');
    }
    if (!isset($_SESSION['fase3_concluida']) || $_SESSION['fase3_concluida'] !== true){
      header('Location: desafio3.php');
    }

    if (isset($_SESSION['fase4_concluida']) && $_SESSION['fase4_concluida'] == true) {
    header("Location: desafio5.php");
} else {
    $_SESSION['fase4_concluida'] = false;
}


?>
<body>
    <div class="container">
    <h1>FASE 4</h1>

    <div class="caixa-pergunta">
        <p class="pergunta">Muito bem, agora que o caminho está iluminado, a biblioteca ganha forma. Em meio aos volumes empoeirados, você sente um calor familiar, como um abraço. Você se lembra do avô contando que, para ele, o lar era onde o coração se aquecia. De repente, a luz da vela parece tremer levemente. Em qual direção você irá procurar o livro?</p><br>

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
require_once "../php-be/desafio4_be.php";

$geral = new desafio4_be();

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    $resposta = $_POST['Fase4'];

    $geral-> Resposta4($resposta);
}?>
</div>
</div>
</body>
</html>



