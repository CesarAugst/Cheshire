<?php 

$conexao = mysqli_connect('localhost', 'root', '', 'Matematica', '3307');

$num1 = ($_POST['txtnum1']);
$num2 = ($_POST['txtnum2']);
$grau = ($_POST['txtgrau']);
$quad = ($_POST['txtquad']);

$sql = "insert into Grau" . "(num1, num2, grau, quadrante)" . "values ($num1, $num2, $grau, '$quad')";

$con = mysqli_query($conexao, $sql);

if ($con) {
    echo "Gravado";
}else{
    $msg2 = mysqli_erro($con);
}
?>