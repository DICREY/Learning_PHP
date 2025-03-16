<?php
    // Active strict type 
    declare(strict_types=1); // active a nivel de archivo

    // Imports
    require_once('./consts.php');
    require_once('./functions.php');

    // Vars 
    $data_global = [
        "data" => get_data(API_URL),
    ];
    $until_message = get_until_message(2);
?>

<?php 
    render_template('head',["title_page" => "Learning PHP"]);
    render_template('style');
    render_template('main',array_merge($data_global,["until_message" => $until_message]));
    render_template('script',$data_global);
?>


