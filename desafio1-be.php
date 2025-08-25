<?php
class Fase1{
    
    public function Resposta1($resposta){
        if($resposta == "Cerejeira_no_quintal"){
            echo "Você acertou. <a href='desafio2.php'>Prossiga!</a>";
        }
        if($resposta == "Embaixo_do_tapete"){
            echo "Você só encontrou poeira, tente outra alternativa!";
        }
        if($resposta == "Nos_fundos"){
        echo "Você só perdeu tempo, tente outra alternativa!";
        }
        if($resposta == "Chale"){
            echo "Você não encontrou nada, e perdeu muito tempo. Tente outra alternativa!";
        }
}
}
?>