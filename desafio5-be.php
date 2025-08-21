<?php
class Fase5{
    public function Resposta5($resposta){
        if($resposta== "CAELUM" || $resposta== "Caelum" || $resposta== "caelum"){
            echo "Você acertou. Encontrou o livro do seu avô e recuperou as mais lindas memórias. <a href='paginafinal.php'>Clique aqui</a> para ver sua pontuação";
        } else{
            echo "Incorreto. Tente novamente!";
        }
}
}
?>