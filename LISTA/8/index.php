<?php

    require_once "Filme.php";

    $filme1 = new Filme();
    $filme1->titulo = "Rei leao";
    $filme1->genero = " Infantil/Musical ";
    $filme1->duracaoMinutos = 129;
    $filme1->notaAvaliacao = "8,5";

    echo "<p> " . $filme1->exibir() . " </p>";
            
?>