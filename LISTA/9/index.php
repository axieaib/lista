<?php

    require_once "Agenda.php";

    $agenda1 = new Agenda();
    $agenda1->nomeContato = "Axie";
    $agenda1->telefone = "(12) 123123413";
    $agenda1->email = "axielote@gmail.com";
    $agenda1->favorito = true;

    echo "<p> " . $agenda1->exibirContato() . " </p>";
            
?>