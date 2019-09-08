	<!DOCTYPE html>
	<html lang="pt-br">

	<head>
		<title>Cadastro</title>
	</head>

	<body>
		<header>
			<a href="Login.php">Login</a>
			<a href="Inicio.php"><img src="img/cheshire1.png" width="100px" height="80px" alt="" title="" /></a>
		</header>
		<section>
			<h1>Permita-se a um novo tipo de interação</h1>
			<p>Esta aplicação traz uma interação mais proxima entre orientador e aluno através de uma aplicação web</p>
			<a href="Login.php">Ja possui uma conta?</a>
		</section>
		<section>
			<h1>Horário de atendimento</h1>
			<p>Os orientadores da Etec de Cotia estão a sua diposição nos seguintes horários:</p>
			<ul>
				<li>
					<span>Segunda a Sexta</span>
					<span>08.00 Manhã - 08.00 Noite</span>
				</li>
				<li>
					<span>Sábado</span>
					<span>08.00 manhã - 12.00 Tarde</span>
				</li>

			</ul>
			<center>
				<form method="post" action="verificaCadastro.php">
					<h3>Cadastre-se</h3>
					<input type="text" name="txtlogin" placeholder="Login" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Login'">
					<input type="text" name="txtsenha" placeholder="Senha" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Senha'">
					<input type="text" name="txtnome" placeholder="Nome" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nome'">
					<input type="text" name="txtsobrenome" placeholder="Sobrenome" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Sobrenome'">

					<select name="optfuncao">
						<option data-display="">Função</option>
						<option value="1">aluno</option>
						<option value="2">funcionario</option>
						<option value="3">orientador</option>
					</select>

					<input type="text" name="txttel" placeholder="Telefone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Telefone'">

					<input type="text" name="txtcel" placeholder="Celular" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Celular'">

					<input type="text" name="txtend" placeholder="Endereço" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Endereço'">
					<button type="submit">Confirmar</button>
				</form>
		</section>

	</body>

	</html>