<!DOCTYPE html>

<?php
session_start();
if ($_SESSION['log'] != 'ativo') {
	session_destroy();
	header("location: pagLogin.php");
}
include("../BACK/conexao.php");
include("../BACK/bancoMensagem.php");
$cod_mensagem = $_GET['cod_mensagem'];
$mensagem = busca($conexao, $cod_mensagem);
?>
<html lang="pt-BR">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="meuCss/estiloso.css">
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <title></title>
</head>

<body>
<?php include_once('includes/NavMensagens/listas.php'); ?>

    <div class="container form-group text-center col-md-6" align="center">
        <form method="POST" action="../BACK/verificaEnvio.php">
                <?php
                if ($_SESSION['tipo'] == 'orientador') {
                    include_once('includes/ResponderMensagem/resOri.inc');
                } else {
                    include_once('includes/ResponderMensagem/resAlu.inc');
                }
                ?>
        </form>
    </div>
</body>

</html>