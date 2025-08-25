<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagína final</title>
</head>
<link rel="stylesheet" href="paginafinal.css">
<body>
    
 
<?php
session_start();
echo "Pontuação final: " . $_SESSION['pontos'];


?>
<p>A aventura chegou ao fim, mas a nossa gratidão é só o começo.

Queríamos que você soubesse que cada passo seu nessa jornada, cada escolha, cada desafio superado, foi mais do que apenas um jogo para nós. Foi a prova de que a nossa história, criada com tanto carinho, encontrou seu lugar nos seus pensamentos e na sua dedicação.

Obrigado por nos dar a chance de compartilhar essa paixão. O apoio de cada um de vocês faz o nosso trabalho ter sentido e nos inspira a continuar sonhando e criando.</p>
<br><p>
Do fundo do coração, 
<div class="glitch">GLITCH</div></p>
<p>Obrigado por jogar!</p>
<a href="creditos.html">Créditos</a>

<form method="POST">
   <input type='submit' value='Jogar novamente'>
</form>

</body>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $_SESSION['pontos'] = 0;

    header("Location: index.html");
    exit();

    
}
?>