<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrando na biblioteca</title>
</head>

<p>Você sempre lembrava das tardes passadas com seu avô naquela biblioteca, enquanto ele ajeitava o velho relógio de bolso e dizia frases que soavam sem sentido; às vezes ria ao se esconder em lugares improváveis, como quando ficou horas debaixo da cerejeira, certo de que segredos precisavam estar bem guardados; agora, diante da biblioteca abandonada que lhe pertenceu, você sabe que precisa enfrentar uma série de desafios para recuperar o livro que guardava as lembranças mais belas dele.</p>

<form method="POST">
    <label for="Fase1">A biblioteca está trancada, e você precisará da chave para entrar. Verifique os lugares onde ela pode estar escondida.</label> <br>

    <input type="radio" name="Fase1" value="Embaixo_do_tapete">Embaixo do tapete <br>
    <input type="radio" name="Fase1" value="Cerejeira_no_quintal">Cerejeira no quintal <br>
    <input type="radio" name="Fase1" value="Nos_fundos">Nos fundos <br>
    <input type="radio" name="Fase1" value="Chale">Chalé ao lado <br>
    <input type="submit" value="Verificar">
</form>
    
</body>
</html>

<?php
require_once("desafio1-be.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['Fase1'])) {
        $resposta = $_POST['Fase1'];
        $Fase1 = new Fase1();
        $Fase1->Resposta1(resposta: $resposta);
    } else {
        echo "Selecione uma alternativa.";
    }
}
?>
