<?php

class Agenda{
    public string $nomeContato;
    public string $telefone;
    public string $email;
    public bool $favorito;

    public function exibirContato(){
        
        $favoritado = $this->favorito ? "Sim" : "Não";
        return "Contato: {$this->nomeContato} | Telefone: {$this->telefone} | Email: {$this->email} | Favorito: {$favoritado}";
        
    }
}

?>