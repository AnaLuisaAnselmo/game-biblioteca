<?php

class desafio4_be {

    public function Resposta4($resposta) {
        if ($resposta == "Livros") {
            $_SESSION['pontos']+= 5;
            $_SESSION['fase4_concluida'] = true;
            header("Location: desafio5.php");
        } 
        if ($resposta == "Direita") {
            $_SESSION['pontos']-= 2;
            echo "Você foi pela direção errada, tente outra!";
}
        if ($resposta == "Fora") {
            $_SESSION['pontos']-= 2;
            echo "Você foi pela direção errada, tente outra!";
}
        if ($resposta == "Esquerda") {
            $_SESSION['pontos']-= 2;
            echo "Você foi pela direção errada, tente outra!";
}

}
}