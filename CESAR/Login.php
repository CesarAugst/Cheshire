	<!DOCTYPE html>
	<html lang="pt-br">
	<head>
		<title>Login</title>
	</head>
	<body>	
		<header>
            <a href="Cadastro.php" class="primary-btn text-uppercase">Cadastre-se</a>
            <a href="Inicio.php"><img src="img/cheshire1.png" width="100px" height="80px" alt="" title="" /></a>
			<nav >
			    <ul class="nav-menu">	        			          
			</nav>		    		
		  </header>

			<section>
				<h1>Permita-se a um novo tipo de interação</h1>
					<p>Esta aplicação traz uma interação mais proxima entre orientador e aluno através de uma aplicação web</p>											
			</section>
			<section>			
				<h1>Horário de atendimento</h1>
				<p>Os orientadores da Etec de Cotia estão a sua diposição nos seguintes horários: </p>
				<ul>
					<li>
						<span>Segunda a Sexta</span>
						<span>08:00 Manhã - 08:00 Noite</span>
					</li>
					<li>
						<span>Sábado</span>
						<span>08:00 manhã - 12:00 Tarde</span>
					</li>																								
				</ul>
                <form method="post" action="verificaLogin.php">
					<h3 >Acesse sua conta</h3>		
						<input type="text" name="txtlogin" placeholder="Usuário" onfocus="this.placeholder = ''" onblur="this.placeholder = ''" >
						<input type="password" name="txtsenha" placeholder="Senha" onfocus="this.placeholder = ''" onblur="this.placeholder = ''" >
                        <button type="submit">Confirmar</button>
                <center><a href="Cadastro.php">Não possui uma conta?</a></center>
				</form>                                                               	
			</section>		
			<footer>
				<p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> Etec de Cotia | Centro Paulo Souza
				<i aria-hidden="true"></i> by
				<a href=" http://www.etecdecotia.com.br/" target="_blank">Etec</a></p>
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-dribbble"></i></a>
				<a href="#"><i class="fa fa-behance"></i></a>

			</footer>
		</body>
	</html>