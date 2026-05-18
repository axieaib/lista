<?php

    require_once "Funcionario.php";

    $funcionario1 = new Funcionario();
    $funcionario1->nome = "Lyney Terra";
    $funcionario1->cargo = "Gestora de RH";
    $funcionario1->salario = 3410.50;

    echo "<p> " . $funcionario1->exibir() . " </p>";
            
?>