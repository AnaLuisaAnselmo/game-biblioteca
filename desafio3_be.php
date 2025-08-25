<?php
class Desafio3_be{
    public function Resposta3($resposta){
        if($resposta== "Banheiro"){
            $_SESSION['pontos']+= 5;
            header("Location: desafio4.php");
        }
        if($resposta== "Recepcao"){
            $_SESSION['pontos']-= 2;
            echo "Você não achou, tente outra alternativa";
        }
        if($resposta== "Secao_livros_brasileiros"){
            $_SESSION['pontos']-= 2;
            echo "Você errou, tente novamente.";
        }
        if($resposta== "Secao_livros_americanos"){
            $_SESSION['pontos']-= 2;
            echo "infelizmente você pegou o caminho errado";
        }
    
    }
}
?>