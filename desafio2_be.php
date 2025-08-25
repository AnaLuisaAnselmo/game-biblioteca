<?php
class Desafio2_be{
    public function Resposta2($resposta){
        if($resposta == "americano"){
            $_SESSION['pontos']+= 5;
            header("Location: desafio3.php");
        }
        if($resposta == "recepcao"){
            $_SESSION['pontos']-= 2;
            echo "Você não encontrou nada, tente outra alternativa!";
        }
        if($resposta == "brasileiro"){
            $_SESSION['pontos']-= 2;
        echo "Você só perdeu tempo, tente outra alternativa!";
        }
         if($resposta == "banheiro"){
            $_SESSION['pontos']-= 2;
        echo "Você só encontrou um fedor tremendo, tente outra alternativa!";
        }
}
}
?>