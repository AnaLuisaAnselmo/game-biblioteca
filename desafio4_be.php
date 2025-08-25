<?php

class desafio4_be {

    public function Resposta4($resposta) {
        if ($resposta == "Livros") {
            $_SESSION['pontos']+= 5;
            echo "Você acertou. <a href='desafio5.php'> Prossiga!";
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