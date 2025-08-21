<?php
class Fase1{
    public function Resposta1($resposta){
        if($resposta == "Procurar_na_seção_de_livros_americanos"){
            echo "Você acertou. <a href='desafio3.php'>Prossiga!</a>";
        }
        if($resposta == "Procurar_na_recepção"){
            echo "Você só encontrou a recepcionista, tente outra alternativa!";
        }
        if($resposta == "Procurar_na_seção_de_livros_brasileiros"){
        echo "Você só perdeu tempo, tente outra alternativa!";
        }
         if($resposta == "Procurar_no_Banheiro"){
        echo "Você só encontrou um fedor tremendo, tente outra alternativa!";
        }
}
}
?>