<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Fase 2</title>
</head>
<body>
    <form method="post">
  <label>* Após entrar na biblioteca abandonada, você percebe que não enxerga nada, você terá que procurar por velas e fósforos. Aonde você vai procurar?</label><br>
  <input type="radio" value="Procurar_na_seção_de_livros_americanos" name="alternativa" >
  <label for="Procurar na seção de livros americanos."> Procurar na seção de livros americanos.</label><br>
  <input type="radio" id="" name="alternativa" value="Procurar_na_recepção">
  <label for="masculino">  Procurar na recepção.</label><br>
  <input type="radio" id="outro" name="alternativa" value="Procurar_na_seção_de_livros_brasileiros">
  <label for="outro">  Procurar na seção de livros brasileiros.</label><br>
    <input type="radio" id="outro" name="alternativa" value="Procurar_no_Banheiro">
  <label for="outro">  Procurar no Banheiro.</label><br>
  <input type="submit">
</form>

</body>
</html

<?php
require_once("alternativas.php");

$fase1 = new Fase1();
$mensagem = "";

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if (isset($_POST['alternativa']) && !empty($_POST['alternativa'])) {
        $resposta = $_POST['alternativa'];

       
        $fase1->Resposta1($resposta);

       
     
    } else {
   
        $mensagem = "⚠ Por favor, selecione uma alternativa!";
    }
}
?>
<?php if (!empty($mensagem)) : ?>
    <p style="color: red; font-weight: bold;"><?= $mensagem ?></p>
<?php endif; ?>