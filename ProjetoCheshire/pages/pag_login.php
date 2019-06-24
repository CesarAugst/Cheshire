<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Tela de Login</title>
    </head>
    <body>
        <h1>Essa é a página de login</h1>
        <form method="POST">
            <label>Usuário:<br><input type="text" name="txtu"><br></label>
            <label>Senha:<br><input type="text" name="txts"><br></label>
            <input type="submit" value="Logar"><br>
        </form>
        <p>Clique para retornar a <a href="../index.html" title="Pagina principal">página principal</a></p>
        <?php
            include("conexao.php");
            include("banco-usuario.php");
            if ($_POST) {
                $user = $_POST['txtu'];
                $senha = $_POST['txts'];                
                if(efetuarLogin($conexao, $user, $senha)){
                    session_start();
                    $_SESSION['nome'] = $user;
                    $_SESSION['log'] = 'ativo';
                    header("location: pag_menu.php");
                    die();
                }else{
                    echo 'Usuario ou senha incorreto';
                }
            }
        ?>
    </body>
</html>
