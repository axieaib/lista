<?php

    require_once "Aluno.php";

    $aluno1 = new Aluno();
    $aluno1->nome = "Axie lyney";
    $aluno1->matricula = "12134122";
    $aluno1->nota1 = 2.0;
    $aluno1->nota2 = 5.9;
            
    echo "<p>Aluno: {$aluno1->nome} | Matrícula: {$aluno1->matricula} | Nota 1: {$aluno1->nota1} | Nota 2: {$aluno1->nota2} | Média: " . $aluno1->calcularMedia() . "</p>";
            
?>
