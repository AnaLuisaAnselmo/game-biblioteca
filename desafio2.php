<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>FASE 2</title>
</head>
<body>

  <h1>FASE 2</h1>

    <div><p><h2>Após entrar na biblioteca abandonada, você percebe que não enxerga nada, você terá que procurar por velas e fósforos. Aonde você vai procurar?</h2></p></div>

  <form method="POST">
     <input type = "radio" name = "Fase2" value="americano"> (A)Procurar na seção de livros americanos.
     <input type = "radio" name = "Fase2" value="recepcao"> (B)Procurar na recepção.
     <input type = "radio" name = "Fase2" value="brasileiro"> (C)Procurar na seção de livros brasileiros.
     <input type = "radio" name = "Fase2" value="banheiro"> (D)Procurar no Banheiro.
     <input type= "submit" value="Verificar">
           </form>


</body>
</html>

<?php
require_once "desafio2_be.php";

$geral = new desafio2_be();

if ($_SERVER['REQUEST_METHOD'] === "POST") {

        $resposta = $_POST['Fase2'];

       
        $geral->Resposta2($resposta);

}
       
     
  