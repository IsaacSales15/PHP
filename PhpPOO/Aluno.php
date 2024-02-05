<?php

class Aluno {
    private $nome;
    private $materia;
    private $fone;

    public function __construct($nome, $materia, $fone) {
        $this->nome = $nome;
        $this->materia = $materia;
        $this->fone = $fone;
    }

    public function estudar() {
        echo "Olá, eu sou {$this->nome} e estou estudando {$this->materia}!\n";
    }
}
