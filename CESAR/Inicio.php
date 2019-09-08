<!DOCTYPE html>
<html lang="pt-br">
<?php
session_start();
if ($_SESSION['log'] != 'ativo') {
	session_destroy();
	header("location: Login.php");
}
?>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>

<body>
	<?php
	echo "Bem Vindo! <b>" . $_SESSION['rm'] . " </b>";
	?>

	

</body>

</html>