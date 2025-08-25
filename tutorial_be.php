<?php
class tutorial_be {
    public function Resposta($resposta){
        if($resposta== "opcao_4"){
            header('Location: tutorial2.php');
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

