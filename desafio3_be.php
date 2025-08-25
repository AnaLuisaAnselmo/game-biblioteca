<?php
class Desafio3_be{
    public function Resposta3($resposta){
        if($resposta== "Banheiro"){
            echo "Você acertou. <a href='desafio4.php'>Prossiga!</a>";
        }
        if($resposta== "Recepcao"){
            echo "Você não achou, tente outra alternativa";
        }
        if($resposta== "Secao_livros_brasileiros"){
            echo "Você errou, tente novamente.";
        }
        if($resposta== "Secao_livros_americanos"){
            echo "infelizmente você pegou o caminho errado";
        }
    
    }
}
?>