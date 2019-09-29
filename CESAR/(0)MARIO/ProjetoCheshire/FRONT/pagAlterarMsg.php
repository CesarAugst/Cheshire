<!DOCTYPE html>

<?php       
    include("conexao.php");
    include("bancoMensagem.php");
    $cod_mensagem=$_GET['cod_mensagem'];
    $mensagem= busca($conexao, $cod_mensagem);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="pagMsgRecebidas" title="Clique para abrir a caixa de entrada" >Lista</a>
        <form method="POST" action="verificaAlteracao.php">
            <pre>
                Codigo: <input type="number" name="txtcod" value="<?php echo $mensagem['cod_mensagem'] ?>"><br>"
                Remetente: <input type="text" name="txtRem" value="<?php echo $mensagem['remetente'] ?>"><br> 
                Destinatario: <input type="text" name="txtDes" value="<?php echo $mensagem['destinatario'] ?>"><br>
                Conteudo: <input type="text" name="txtCon" value="<?php echo $mensagem['conteudo'] ?>"><br>
                Anonimato: <input type="text" name="txtAno" value="<?php echo $mensagem['anonimato'] ?>"><br>
                <input type="submit" value="Cadastrar" name="btn"><br>
            </pre>
        </form>
    </body>
</html>
