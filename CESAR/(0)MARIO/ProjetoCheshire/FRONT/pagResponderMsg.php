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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a class="btn btn-success" href="pagCaixaMsg" title="Clique para abrir a caixa de entrada" >Lista</a>

        <div class="container form-group text-center col-md-6" align="center">
        <form method="POST" action="../BACK/verificaEnvio.php">
            <pre>                
                Remetente: <input class="form-control" type="text" name="txtRem" value="<?php echo $mensagem['remetente'] ?>" disabled><br> 
                Destinatario: <input class="form-control" type="text" name="txtDes" value="<?php echo $mensagem['destinatario'] ?>"><br>
                Conteudo: <input class="form-control" type="text" name="txtCon"><br>
                Anonimato: <input class="form-control" type="text" name="txtAno" value="<?php echo $mensagem['anonimato'] ?>"><br>
                <input class="btn btn-success btn-block btn-lg" type="submit" value="Enviar" name="btn"><br>
            </pre>
        </form>
    </div>
 </body>
</html>
