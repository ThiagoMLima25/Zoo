<section data-include="FAQ">
    <div id="FAQ" data-include="FAQ" class="flex-container pt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6 col-md-4 mb-2 p-2 container-section ">
                    <label class="section-label d-flex justify-content-center">Perguntas Frequentes</label>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                <?php
                    if (!empty($_SESSION["idUser"])) :
                ?>
                    <div class="col-12">
                        <h2>
                            <label>Criar perguntas frequentes</label>
                        </h2>
                    </div>
                    <div class="col-12">
                        <form id="create-FAQ" method="GET">
                            <div class="form-group">
                                <label for="title">Título</label>
                                <input type="text" class="form-control" id="title" name="title">
                            </div>
                            <div class="form-group">
                                <label for="description">Descrição</label>
                                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                            </div>
                            <div class="col-12 text-center">
                                <label id="error-create" class='error'></label>
                                <label id="success-create" class='success'></label>
                            </div>
                            <input type="hidden" id="idUser" name="idUser" value="<?=$_SESSION["idUser"]?>" />
                            <input type="button" class="btn btn-success" value="Criar" onclick="validateCreate()" />
                        </form>
                    </div>
                <?php
                    endif;

                    $publication = new Application\Model\Publication\Publication();
                    $publications = $publication->getPublications();
                    
                    if (!empty($publications)) :
                    foreach ($publication->getPublications() as $key => $publication) :
                ?>
                    <div class="accordion mt-3" id="accordionExample">
                    <!-- CARD -->
                        <div class="card">
                            <div class="row">
                                <div class="col-12">
                                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse<?=$publication['idPublication']?>" aria-expanded="true" aria-controls="collapseOne">
                                        <div class="card-header" id="headingOne">
                                            <?=$publication['titlePublication']?>
                                        </div>
                                    </button>
                                </div>
                            <?php
                                if (!empty($_SESSION["idUser"])) :
                            ?>
                                <button class="btn btn-md btn-danger btn-delete" value="<?=$publication['idPublication']?>" onclick="deletePublicacao(this)">
                                    <i class="icon icon-trash text-right" data-feather="trash"></i>
                                </button>
                            <?php
                                endif;
                            ?>
                            </div>
                            <div id="collapse<?=$publication['idPublication']?>"  class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <?=$publication['descriptionPublic']?>
                                </div>
                            </div>
                        </div>
                        <!-- END CARD -->
                    </div>
                <?php
                    endforeach;
                    endif;
                ?>
            </div>
        </div>
    </div>
</section>
<script>
    function deletePublicacao(deleteFAQ) {
        $.ajax({
            method: "POST",
            url: "http://127.0.0.1/Zoo/application/view/delete-publicacao.php",
            data: {
                idDelete: deleteFAQ.getAttributeNode("value").value
            },
            success: function(result){
                let success = document.getElementById("success-create");

                success.innerHTML = result;
                setTimeout(() => {
                    success.innerHTML = "";
                    window.location.href = "http://127.0.0.1/Zoo/";
                }, 2000)
            }
        });
    }

    function guardarPublicacao(title, description) {
        let idUser = document.getElementById("idUser").value;
        $.ajax({
            method: "POST",
            url: "http://127.0.0.1/Zoo/application/view/nova-publicacao.php",
            data: {
                title: title,
                description: description,
                idUser: idUser
            },
            success: function(result){
                let title = document.getElementById("title").value = "";
                let description = document.getElementById("description").value = "";
                let success = document.getElementById("success-create");

                success.innerHTML = result;
                setTimeout(() => {
                    success.innerHTML = "";
                    window.location.href = "http://127.0.0.1/Zoo/";
                }, 3000)
            }
        });
    }

    function validateCreate() {
        let title = document.getElementById("title");
        let description = document.getElementById("description");
        let error = document.getElementById("error-create");
        let success = document.getElementById("success-create");

        error.innerHTML = "";
        success.innerHTML = "";

        if (title.value === "" && description.value === "") {
            error.innerHTML = "Campo de titulo e descrição obrigatório";
        } else if (title.value === "") {
            error.innerHTML = "Campo de titulo obrigatório";
        } else if (description.value === "") {
            error.innerHTML = "Campo de descrição obrigatório";
        }

        guardarPublicacao(title.value, description.value);
    }

    feather.replace();
</script>