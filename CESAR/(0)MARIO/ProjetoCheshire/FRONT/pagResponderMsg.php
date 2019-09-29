<!DOCTYPE html>

<?php       
    session_start();
    include("../BACK/conexao.php");
    include("../BACK/bancoMensagem.php");
    $cod_mensagem=$_GET['cod_mensagem'];
    $mensagem= busca($conexao, $cod_mensagem);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="pagCaixaMsg" title="Clique para abrir a caixa de entrada" >Lista</a>
        <form method="POST" action="../BACK/verificaEnvio.php">
            <pre>                
                Remetente: <input type="text" name="txtRem" value="<?php echo $mensagem['remetente'] ?>" disabled><br> 
                Destinatario: <input type="text" name="txtDes" value="<?php echo $mensagem['destinatario'] ?>"><br>
                Conteudo: <input type="text" name="txtCon"><br>
                Anonimato: <input type="text" name="txtAno" value="<?php echo $mensagem['anonimato'] ?>"><br>
                <input type="submit" value="Enviar" name="btn"><br>
            </pre>
        </form>
    </body>
</html>
