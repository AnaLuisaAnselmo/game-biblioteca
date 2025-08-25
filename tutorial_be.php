<?php
class tutorial_be {
    public function Resposta($resposta){
        if($resposta== "opcao_4"){
            echo "Você acertou. <a href='tutorial2.php'>Prossiga!</a>";
        }
        if($resposta== "opcao_1"){
            echo "Você errou, tente novamente.";
        }
        if($resposta== "opcao_2"){
            echo "Você errou, tente novamente.";
        }
        if($resposta== "opcao_3"){
            echo "Você errou, tente novamente.";
        }
    
    }
}

