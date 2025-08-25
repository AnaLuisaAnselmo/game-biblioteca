<?php
class Desafio2_be{
    public function Resposta2($resposta){
        if($resposta == "americano"){
            echo "Você encontrou as velas, procure os fósforos. <a href='desafio3.php'>Prossiga!</a>";
        }
        if($resposta == "recepcao"){
            echo "Você não encontrou nada, tente outra alternativa!";
        }
        if($resposta == "brasileiro"){
        echo "Você só perdeu tempo, tente outra alternativa!";
        }
         if($resposta == "banheiro"){
        echo "Você só encontrou um fedor tremendo, tente outra alternativa!";
        }
}
}
?>