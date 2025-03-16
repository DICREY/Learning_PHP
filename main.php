<?php
    // Vars 
    const API_URL = "https://api.thecatapi.com/v1/images/search?limit=10";
    $bestlan = ["PHP","JAVA","JAVASCRIPT"];
    $age = 62;

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

    // init curl 
    $ch = curl_init(API_URL);

    // Recibir resultado y no mostrar en pantalla
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);

    // Execute cURL
    // $result = curl_exec($ch);
    $result = file_get_contents(API_URL);

    $data = json_decode($result,true);

    curl_close($ch);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./main.css">
    <title>Learning PHP</title>
</head>
<body>
    <main>
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
        <picture id="img-container">
            <?php foreach ($data as $d) : ?>
                <img src=<?= $d['url'] ?> alt="cat">
            <?php endforeach; ?>
        </picture>
    </main>
    <script>
        const containerImg = document.getElementById("img-container")

        let scrollAmount = 0
        let leftScroll = 200
        const scrollInterval = setInterval(() => {
            containerImg.scrollBy({ left: leftScroll, behavior: "smooth" })
            scrollAmount += leftScroll
            if (scrollAmount > (1000 + containerImg.scrollWidth - containerImg.clientWidth)) {
                containerImg.scrollTo({ left: 0, behavior: "smooth"})
                scrollAmount = 0
            }
        },1000)

    </script>
</body>
</html> 