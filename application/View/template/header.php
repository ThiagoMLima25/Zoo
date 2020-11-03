<?php
    $login_errors = "";
    if (count($_POST) > 0 && isset($_POST["user"]) && isset($_POST["password"])) {
        if (isset($_POST["user"]) && isset($_POST["password"]) && empty($_POST["user"]) && empty($_POST["password"])) {
            $login_errors = "Informe o seu usuário e senha";
        } else if (isset($_POST["user"]) && empty($_POST["user"])) {
            $login_errors = "Informe o seu usuário";
        } else if (isset($_POST["password"]) && empty($_POST["password"])) {
            $login_errors = "Informe sua senha";
        } else {
            $login = new Application\Model\User\Login($_POST["user"], $_POST["password"]);
            if (empty($login)) {
                $login_errors = "Login incorreto";
            } else {
                $_SESSION = $login->getLoggedUser();
            }
        }
    }
?>
<header>
    <div class="col-12 text-center">
        <img src="./application/src/images/logo-zoo-guarulhos.png" class="img-fluid logo-banner my-4 row-no-padding" alt="Responsive image">
    </div>
    <nav class="navbar navbar-expand">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item active mx-2">
                    <a class="nav-link" attr-menu="Inicio" href="#">Inicio</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" attr-menu="Sobre" href="#">Sobre</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" attr-menu="Como-chegar" href="#">Como chegar</a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link" attr-menu="FAQ" href="#">Perguntas frequentes</a>
                </li>
            </ul>
            <?php
                echo (empty($_SESSION)) ? '<button class="nav-link login" data-toggle="modal" data-target="#login-modal" attr-menu="Login">Entrar</button>' : '<button class="nav-link logout" data-toggle="modal" data-target="#logout-modal" attr-menu="Logout">Sair</button>';
            ?>
        </div>
    </nav>
</header>

<!-- LOGIN -->
<form id="login" method="POST" action="/Zoo/index.php" onsubmit="return validate()">
    <div class="modal fade" id="login-modal" tabindex="-1" aria-labelledby="login-modal-label" aria-hidden="true" data-backdrop="static" data-keyboard="false" >
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="login-modal-label"><label>LOGIN</label></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="user">Usuário</label>
                        <input type="text" class="form-control" id="user" name="user" aria-describedby="loginUser">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="text-center">
                        <label id="error" class='error'>
                        <?php
                            echo $login_errors;
                        ?>
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-danger" data-dismiss="modal">Fechar</button>
                    <input type="submit" class="btn btn-success" value="Entrar" />
                </div>
            </div>
        </div>
    </div>
</form>

<!-- LOGOUT -->
<form id="logout" method="POST" action="application/view/sair.php">
    <div class="modal fade" id="logout-modal" tabindex="-1" aria-labelledby="logout-modal-label" aria-hidden="true" data-backdrop="static" data-keyboard="false" >
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="logout-modal-label"><label>Sair</label></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <label for="logout">Tem certeza que deseja sair?</label>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-danger" data-dismiss="modal">Não</button>
                    <input type="submit" class="btn btn-success" value="Sim" />
                </div>
            </div>
        </div>
    </div>
</form>

<script>
    function validate() {
        let user = document.getElementById("user");
        let password = document.getElementById("password");
        let error = document.getElementById("error");

        error.innerHTML = "";

        if (user.value === "" && password.value === "") {
            error.innerHTML = "Informe o seu usuário e senha";
        } else if (user.value === "") {
            error.innerHTML = "Informe o seu usuário";
        } else if (password.value === "") {
            error.innerHTML = "Informe a sua senha";
        } else {
            document.getElementById("login").submit();
        }
        return false;
    }
</script>