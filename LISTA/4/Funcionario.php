<?php

class Funcionario{
    public string $nome;
    public string $cargo;
    public float $salario;

    public function exibir(){
        return "Nome: {$this->nome} | Cargo: {$this->cargo} | Salário: R$ {$this->salario}";
    }
}

?>