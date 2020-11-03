<?php
    header("Access-Control-Allow-Origin: *");
    header('Content-Type: text/html; charset=UTF-8');
    
    mb_internal_encoding('UTF-8');
    $utf_set = ini_set('default_charset', 'utf-8');
    if (!$utf_set) {
        throw new Exception('Não foi possível definir default_charset para utf-8, certifique-se de que esteja definido em seu sistema!');
    }

    mb_http_output('UTF-8');

    require_once __DIR__."/vendor/autoload.php";
    $session = new Application\Model\Connection\Session();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="./application/node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="./application/src/css/index.css">
        <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">

        <script src="./application/src/js/includeFile.js" ></script>
        <script src="./application/node_modules/feather-icons/dist/feather.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <title>Zoológico de Guarulhos</title>
    </head>
    <body>
        <?php
            include_once("./application/View/template/header.php");
            include_once("./application/View/template/body.php");
            include_once("./application/View/template/footer.php");
        ?>
    </body>
    <script src="./application/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
</html>