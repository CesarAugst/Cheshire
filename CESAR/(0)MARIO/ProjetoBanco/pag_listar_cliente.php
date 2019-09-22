<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<?php
include("conexao.php");
include("banco-mensagem.php");
?>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="pagEnviar" title="Clique para enviar uma mensagem" >Enviar mensagem</a>
        <a href="pag_menu" title="Retornar ao menu principal" >menu</a>
        <h1>Menagens recebidas</h1><br>
        
        
        <table border="1">
            <tr>
                <td>id da Mensagem</td>
                <td>Remetente</td>
                <td>Destinatario</td>
                <td>Endereço</td>
                <td>Email</td>
                <td>Idade</td>
                <td>Salario</td>
                <td>Exlcuir</td>
                <td>Alterar</td>
            </tr>
            
            <?php
                $clientes = listaClientes($conexao);
                foreach ($clientes as $cliente):
            ?>
            
            <tr>
                <td><?php echo $cliente['cod_cliente'] ?></td>
                <td><?php echo $cliente['nome'] ?></td>
                <td><?php echo $cliente['telefone'] ?></td>
                <td><?php echo $cliente['endereco'] ?></td>
                <td><?php echo $cliente['email'] ?></td>
                <td><?php echo $cliente['idade'] ?></td>
                <td><?php echo $cliente['salario'] ?></td>
                <td><a href="pag_excluir_cliente.php?cod_cliente=
                       <?php echo $cliente['cod_cliente'] ?>">excluir</a> 
                </td>
                <td><a href="pag_alterar_cliente.php?cod_cliente=
                       <?php echo $cliente['cod_cliente'] ?>">alterar</a></td>
            </tr>
            <?php
                endforeach;
            ?>
        </table>
        
    </body>
</html>
