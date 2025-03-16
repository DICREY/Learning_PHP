<?php
// Functions 

    // Active strict type 
    declare(strict_types=1); // active a nivel de archivo

    // Get with cURL
    function get_data_curl(string $url):array {
        global $title;

        // init curl 
        $ch = curl_init($url);
    
        // Recibir resultado y no mostrar en pantalla
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);
    
        // Execute cURL
        $result = curl_exec($ch);

        // json to associative array
        $data = json_decode($result,true);
        
        // Close curl 
        curl_close($ch);

        echo $title;
        
        return $data;
    }

    // method for get data 
    function get_data(string $url) :array {// :array tipo de dato que returna
        // get data
        $result = file_get_contents($url);
        
        // json to associative array
        $data = json_decode($result,true);

        return $data;
    }
    
    // Condition Match 
    function get_until_message( int $days):string {
        return match (true) {
            $days === 0 => "Es hoy ponte los pantalones my rey",
            $days === 1 => "Es mañana preparate corazon",
            $days === 2 => "Es en dos dias ya casi mi rey",
            $days <= 7 => "Es esta semana tienes tiempo uufff",
            $days <= 30 => "Es este mes uff estamos pero sobraos",
            default => "Faltan $days dias"
        };
    }

    // Render templates
    function render_template (string $template, array $data = []) {
        extract($data);
        require "./templates/$template.php";
    }
?>