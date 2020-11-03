<?php
    require_once "../../vendor/autoload.php";

    $session = new Application\Model\Connection\Session();
    $session->cleanSession();
    header('Location: http://127.0.0.1/Zoo/');
?>