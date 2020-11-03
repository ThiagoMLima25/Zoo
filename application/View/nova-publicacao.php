<?php
    require_once "../../vendor/autoload.php";

    $publicationValue = [
            "idUser"            =>  $_POST["idUser"],
            "idTypePublication" =>  "5",
            "titlePublication"  =>  $_POST["title"],
            "descriptionPublic" =>  $_POST["description"]
    ];

    $publication = new Application\Model\Publication\Publication();
    $result = $publication->insert($publicationValue);
    
    echo ($result) ? "Não foi possivel salvar a publicação" : "Publicação salva com sucesso";
?>