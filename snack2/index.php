<?php 
    $name = key_exists('name', $_GET) ? $_GET['name'] : "";
    $mail = key_exists('mail', $_GET) ? $_GET['mail'] : "";
    $age = key_exists('age', $_GET) ? intval($_GET['age']) : "";
    if(strlen($name) > 3 && strpos($mail, '.') !== false && strpos($mail, '@') !== false && !is_nan($age)){
        $access = "Accesso riuscito";
    } else {
        $access = "Accesso negato";
    }

    //var_dump($name, strlen($name) > 3, $mail, strpos($mail, '.') !== false, strpos($mail, '@') !== false, $age, !is_nan($age));

    echo $access
?>