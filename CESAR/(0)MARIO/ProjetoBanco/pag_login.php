<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Tela de Login</title>
    </head>
    <body>
        <form method="POST">
            Usuário:<input type="text" name="txtu"><br>
            Senha:<input type="text" name="txts"><br>
            <input type="submit" value="Logar"><br>
        </form>
        <?php
            include("conexao.php");
            include("bancoUsuario.php");
            if ($_POST) {
                $user = $_POST['txtu'];
                $senha = $_POST['txts'];
                session_start();
                $_SESSION['rm'] = buscaRm($conexao, $user, $senha)['cod_usuario'];
                $_SESSION['nome'] = buscaNome($conexao,$_SESSION['rm'])['nome'];

                if(efetuarLogin($conexao, $user, $senha)){
                    $_SESSION['log'] = 'ativo';
                    header("location: pagMenuPrincipal.php");                    
                    die();
                }else{
                    echo 'Usuario ou senha incorreto';
                }
            }
        ?>
    </body>
</html>
