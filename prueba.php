<?php

class MiClase {



    public function __construct(
        public $a = 2, 
        public $b = 3, 
        public $c = 7,
        ) {}
    

    public function MiFuncion() {
        echo '<pre>';
        echo print_r($this->a);
        echo '</pre>';
        echo '<pre>';
        echo print_r($this->b);
        echo '</pre>';
        echo '<pre>';
        echo print_r($this->c);
        echo '</pre>';
    }
}

$variable = new MiClase();
$variable->MiFuncion();

class Numero2{
    private int|float $numero;

    public function __construct(int|float $numero) {
        $this->numero = $numero;
        echo '<pre>';
        echo print_r($this->numero);
        echo '</pre>';
    }
    
}

new Numero2(123);

echo match('8'){
    '8'=>"Esto es un texto",
    8=>"Esto es un numero",
};