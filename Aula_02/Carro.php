<?php

class Carro
{
    // Atributos da classe:
    public $cor;
    public $numeroPortas;

    // Método da classe:
    public function buzinar(): void
    {
        echo "O carro de cor {$this->cor} com {$this->numeroPortas} portas buzinou.\n";
    }

}