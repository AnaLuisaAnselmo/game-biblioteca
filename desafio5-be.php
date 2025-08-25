<?php

class Fase5{
    
    public function Resposta5($resposta){
        if($resposta== "CAELUM" || $resposta== "Caelum" || $resposta== "caelum"){
            $_SESSION['pontos']+= 20;
            echo "Você acertou. Encontrou o livro do seu avô e recuperou as mais lindas memórias. <a href='paginafinal.php'>Prossiga para a pagina final.</a>";
        } else{
            $_SESSION['pontos']-= 15;
            echo "Incorreto. Tente novamente!";
        }
}
}
?>