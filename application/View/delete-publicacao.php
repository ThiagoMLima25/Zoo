<?php
    require_once "../../vendor/autoload.php";

    $publication = new Application\Model\Publication\Publication();
    $result = $publication->deleteById($_POST["idDelete"]);
    
    echo ($result) ? "Não foi possivel excluir a publicação" : "Publicação excluida com sucesso";
?>