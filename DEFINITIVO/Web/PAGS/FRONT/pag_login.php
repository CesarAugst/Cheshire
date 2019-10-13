<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Tela de Login</title>
</head>

<body>
    <div class="container" align="center">
        <div class="col-md-6 ">
            <form method="POST">
                <br><br><br><br><br>
                Usuário:<input class="form-control" type="text" name="txtu"><br>
                Senha:<input class="form-control" type="password" name="txts"><br>
                <input class="btn btn-outline-success btn-block btn-lg" type="submit" value="Logar"><br>
            </form>
            <?php
            include("../BACK/conexao.php");
            include("../BACK/bancoUsuario.php");
            if ($_POST) {
                $user = $_POST['txtu'];
                $senha = $_POST['txts'];
                session_start();
                $_SESSION['rm'] = buscaRm($conexao, $user, $senha)['cod_usuario'];
                $_SESSION['nome'] = buscaNome($conexao, $_SESSION['rm'])['nome'];
                $_SESSION['tipo'] = buscaTipo($conexao, $_SESSION['rm'])['tipo'];

                if (efetuarLogin($conexao, $user, $senha)) {
                    $_SESSION['log'] = 'ativo';
                    header("location: pagMenuPrincipal.php");
                    die();
                } else {
                    echo 'Usuario ou senha incorreto';
                }
            }
            ?>
</body>
</div>
</div>

</html>