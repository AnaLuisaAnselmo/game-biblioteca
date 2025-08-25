<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio Final</title>
    <link rel="stylesheet" href="desafio5.css">
</head>
<body>
    <div class="container">
        <h1>DESAFIO FINAL</h1>
        <div class="caixa-pergunta">
           
        <p class="introducao">Enquanto você estava andando, você acaba encontrando um papel com vários símbolos.</p>

        <img src='img/alfabeto.png' alt="Imagem do alfabeto"><br>

         <div class="introducao"> 
        <p class="pergunta"> Após você andar por alguns minutos você acaba achando uma porta bem diferente, logo vem a sua cabeça que o livro pode estar lá, quando você se aproxima, acaba notando que tem os mesmos símbolos do papel na porta.</p> <br>
        </div>
        <h1 class="texto">Caelum</h1>

        <form method="POST" class="form-fase">
            <label for="Fase5">Digite as letras que correspondem para cada símbolo:</label><br>
            <input type="text" name="Fase5" class="opcao"> <br>
            <button type="submit" class="btn">Verificar</button>
        </form>
    </div>
<div class="resposta">
        <?php
            require_once("desafio5-be.php");
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $Fase5 = new Fase5();
                $resposta = $_POST['Fase5'];
                $Fase5->Resposta5($resposta);
            }
        ?></div>
        </div>
</body>
</html>
