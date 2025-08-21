<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fase 1</title>
    <link rel="stylesheet" href="desafio1.css">
</head>
<body>

    <div class="container">
        <h1>FASE 1</h1>

        <p class="introducao">
            Você sempre lembrava das tardes passadas com seu avô naquela biblioteca, enquanto ele ajeitava o velho relógio de bolso e dizia frases que soavam sem sentido; às vezes ria ao se esconder em lugares improváveis, como quando ficou horas debaixo da cerejeira, certo de que segredos precisavam estar bem guardados; agora, diante da biblioteca abandonada que lhe pertenceu, você sabe que precisa enfrentar uma série de desafios para recuperar o livro que guardava as lembranças mais belas dele.
        </p>

        <div class="caixa-pergunta">
            <p class="pergunta">
                A biblioteca está trancada, e você precisará da chave para entrar. 
                Verifique os lugares onde ela pode estar escondida.
            </p>
            <small>*Para você ir para a próxima fase, basta escolher uma das opções abaixo.</small>

            <form method="POST" class="form-fase">
                <label class="opcao">
                    <input type="radio" name="Fase1" value="Embaixo_do_tapete"> (A) Embaixo do tapete
                </label>
                <label class="opcao">
                    <input type="radio" name="Fase1" value="Cerejeira_no_quintal"> (B) Cerejeira no quintal
                </label>
                <label class="opcao">
                    <input type="radio" name="Fase1" value="Nos_fundos"> (C) Nos fundos
                </label>
                <label class="opcao">
                    <input type="radio" name="Fase1" value="Chale"> (D) Chalé ao lado
                </label>

                <button type="submit" class="btn">Verificar</button>
            </form>
        </div>

        <div class="resposta">
            <?php
            require_once("desafio1-be.php");
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $Fase1 = new Fase1();
                $resposta = $_POST['Fase1'];
                $Fase1->Resposta1($resposta);
            }
            ?>
        </div>
    </div>

</body>
</html>
