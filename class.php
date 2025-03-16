<?php 
    // Active strict type 
    declare(strict_types=1); // active a nivel de archivo
    
    class SuperCat {
        // props and Methods
        public function __construct(
            readonly public string $name,
            protected array $power, // -> Promoted properties -> PHP 8
            private string $planet)
        {
        }

        public function attack() {
            return "$this->name atacaaaaa";
        }

        public function description() {
            $powers = implode(" ",$this->power);

            return "$this->name el super gato que viene de $this->planet y sus poderes $powers salvan al mundo";
        }
    }

    $mishi = new SuperCat("Batman",["Inteligencia","Fuerza", "tecnologia"],"Gotica");
    echo $mishi->description();