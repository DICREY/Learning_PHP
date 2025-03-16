<?php
    // Active strict type 
    declare(strict_types=1); // active a nivel de archivo

    // Vars
    $bestlan = ["PHP","JAVA","JAVASCRIPT"];
    $age = 62;
    $title = 'Hola';

    // Conditions
    $output = match(true) {
        $age < 2 => "Eres un bebe",
        $age < 10 => "Eres un niño",
        $age < 18 => "Eres un adolecente",
        $age === 18 => "Eres mayor de edad",
        $age < 40 => "Eres adulto joven",
        $age < 60 => "Eres adulto viejo",
        default => "Hueles a madera mijo"
    };

    // Add element to list 
    $bestlan[] = "TYPESCRIPT"; 

?>
<h1>
    <?= "Edad: $age <br> $output" ?>
</h1>
<h2>
    <?= "Tu lenguaje favorito es: $bestlan[3]" ?>
</h2>
<ol>
    <?php foreach($bestlan as $key => $i) : ?>
        <li><?= $key . " " . $i ?></li>
    <?php endforeach; ?>
</ol>