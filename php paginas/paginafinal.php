<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagína final</title>
</head>
<link rel="stylesheet" href="paginafinal.css">
<body>

<div class="php">
 
<?php
session_start();
echo "<h1 class='pontuacao'>Pontuação final: " . $_SESSION['pontos'] . "/50 </h1>";



     if (!isset($_SESSION['fase1_concluida']) || $_SESSION['fase1_concluida'] !== true){
    header("Location: desafio1.php");
    }
    if (!isset($_SESSION['fase2_concluida']) || $_SESSION['fase2_concluida'] !== true){
      header('Location: desafio2.php');
    }
    if (!isset($_SESSION['fase3_concluida']) || $_SESSION['fase3_concluida'] !== true){
      header('Location: desafio3.php');
    }
    if (!isset($_SESSION['fase4_concluida']) || $_SESSION['fase4_concluida'] !== true){
      header('Location: desafio4.php');
    }
    if (!isset($_SESSION['fase5_concluida']) || $_SESSION['fase5_concluida'] !== true){
      header('Location: desafio5.php');
    }
    ?>


</div><br><br>

<div class="texto">
<p>A aventura chegou ao fim, mas a nossa gratidão é só o começo.

Queríamos que você soubesse que cada passo seu nessa jornada, cada escolha, cada desafio superado, foi mais do que apenas um jogo para nós. Foi a prova de que a nossa história, criada com tanto carinho, encontrou seu lugar nos seus pensamentos e na sua dedicação.

Obrigado por nos dar a chance de compartilhar essa paixão. O apoio de cada um de vocês faz o nosso trabalho ter sentido e nos inspira a continuar sonhando e criando.</p></div><br>

<div class="agradecimentos">
<p>
Do fundo do coração, 
<div class="glitch">GLITCH</div></p>

<p>Obrigado por jogar!</p></div>
<a href="creditos.php">Créditos</a>


<form method="POST">
   <input type='submit' value='Jogar novamente'>
</form>

</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $_SESSION['pontos'] = 0;
    $_SESSION['fase1_concluida'] = false;
    $_SESSION['fase2_concluida'] = false;
    $_SESSION['fase3_concluida'] = false;
    $_SESSION['fase4_concluida'] = false;
    $_SESSION['fase5_concluida'] = false;

    header("Location: index.html");
    exit();

    
}
?>