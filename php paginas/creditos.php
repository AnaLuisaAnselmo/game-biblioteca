<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="creditos.css">
</head>
<body>
<audio id="bg-music" loop muted>
  <source src="musica/goddess.mp3" type="audio/mpeg">
</audio>

<script>
  const music = document.getElementById("bg-music");
  music.play(); // começa mudo

  // assim que o usuário clicar em qualquer lugar, desmuta e toca
  document.addEventListener("click", () => {
    music.muted = false;
    music.play();
  }, { once: true });
</script>


    <div class="credits">
      
    <h1 class="titulocredito">Créditos do Jogo</h1>

    <p class="section-title"><strong>Desenvolvimento Geral</strong></p>
    <div class="logo">
    <p class="star">Z</p><p class="glitch"><strong>GLITCH</strong></p><p class="star">Z</p>
    </div>

    <br>
    <div class="section">
        <p class="section-title"><strong>Equipe de Criação</strong></p>
        <p><strong>Roteiro e História:</strong> João Augusto, Ana Luisa e Letícia</p>
        <p><strong>Design Visual e UI/UX:</strong> Ana Luisa e Amanda</p>
        <p><strong>Áudio e Efeitos Sonoros:</strong> Laufey</p>
    </div>
    <br>

    <div class="section">
        <p class="section-title"><strong>Programação e Back-End</strong></p>
        <p><strong>Programadores:</strong> João Augusto, Letícia, Sophia, Yasmyn</p>
        <p><strong>Linguagens/Tecnologias Utilizadas:</strong> PHP, HTML, CSS</p>
        <p><strong>Ferramentas de Desenvolvimento:</strong>VS Code, GitHub</p>
    </div>
    <br>

    <div class="section">
        <p class="section-title"><strong>Agradecimentos Especiais</strong></p>
        <p>Aos professores Jhonatan e Rafael por todo o apoio e orientação no projeto.</p>
        <p>A todos que testaram o jogo e deram feedback valioso.</p>
        <p>À comunidade de desenvolvimento por fornecer as ferramentas e o conhecimento necessário.</p>

    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    <form method="POST">
   <input type='submit' value='Jogar novamente'>
</form>

    
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
</div>

</body>
</html>