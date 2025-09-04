<?php

class Fase1{
    
    public function Resposta1($resposta){
        if($resposta == "Cerejeira_no_quintal"){
            $_SESSION['pontos']+=15;
            $_SESSION['fase1_concluida'] = true;
            header("Location: desafio2.php");
        }
        if($resposta == "Embaixo_do_tapete"){
            $_SESSION['pontos']-= 10;
            echo "Você só encontrou poeira, tente outra alternativa!";
        }
        if($resposta == "Nos_fundos"){
            $_SESSION['pontos']-= 10;
        echo "Você só perdeu tempo, tente outra alternativa!";
        }
        if($resposta == "Chale"){
            $_SESSION['pontos']-= 10;
            echo "Você não encontrou nada, e perdeu muito tempo. Tente outra alternativa!";
        }
        
        
}
}


?>