<?php

class Fase5{
    
    public function Resposta5($resposta){
        if($resposta== "CAELUM" || $resposta== "Caelum" || $resposta== "caelum"){
            $_SESSION['pontos']+= 20;
            $_SESSION['fase5_concluida'] = true;
            header('Location: paginafinal.php');
        } else{
            $_SESSION['pontos']-= 15;
            echo "Incorreto. Tente novamente!";
        }
}
}
?>