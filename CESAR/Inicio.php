<!DOCTYPE html>
<?php
session_start();
if ($_SESSION['log'] != 'ativo') {
	session_destroy();
	header("location: Login.php");
}
?>
<html lang="pt-br">

<head>
	<title>Inicio</title>
</head>

<body>
	<header>
		<?php
		echo "Bem Vindo! <b>" . $_SESSION['rm'] . " </b>";
		?>
		<a href="logout.php">Logout</a>
		<a href="Inicio.php"><img src="img/cheshire1.png" width="100px" height="70px" alt="" title="" /></a>
		<nav id="nav-menu-container">
			<ul class="nav-menu">
				<li><a href="">Transtornos</a>
					<ul>
						<li><a href="blog-home.html">Emocionais</a></li>
						<li><a href="blog-single.html">Alimentares</a></li>
						<li><a href="blog-single.html">Psicoses</a></li>
					</ul>
				</li>
				<li><a href="Defasagem.php">Defasagem</a></li>
				<li><a href="about.html">Desmotivação</a></li>
				<li><a href="about.html">Problemas familiares</a></li>
				<li><a href="departments.html">Contato</a></li>
			</ul>
		</nav>
	</header>
	<section>
		<h1>Projeto Cheshire</h1>
		<p>Desenvolvimento de aplicação para TCC Desenvolvimento de Sistemas da ETEC de Cotia - 2019</p>
	</section>
	<center>
		<h1>problemas</h1>
	</center>
	<section>
		<a href="Defasagem.php">
			<img src="img/defasagem.jpg" alt="">
			<h4> Defasagem</h4>
			<p>Artigo sobre a defasagem escolar</p>
		</a>
		<a href="#" target="_blank">
			<img src="img/blog/cat-widget2.jpg" alt="">
			<h4>Politics</h4>
			<p>Be a part of politics</p>
		</a>
		<a href="#" target="_blank">
			<img src="img/blog/cat-widget3.jpg" alt="">
			<h4 class="content-title mx-auto text-uppercase">Food</h4>
			<span></span>
			<p>Let the food be finished</p>
		</a>
	</section>
	<section>
		<a href="blog-single.html">
			<h2>Introdução à aplicação</h2>
		</a><br>
		<p>Este projeto tem como base uma otimização na interação entre
			os orientadores educacionais com os alunos que possuem problemas
			educacionais. O objetivo é criar uma ferramenta que aproxime
			o aluno aos profissionais responsáveis por lhe orientar.
			Para tanto, estudos sobre o desenvolvimento de problemas
			educacionais em estudantes e formas de auxílio a indivíduos
			tais transtornos serão realizados a fim de incorporar características
			de métodos de intervenção e apoio mais eficazes a funcionalidades da
			aplicação, tomando como base as atribuições ao cargo de orientadores
			educacionais no ambiente ETEC. Primeiramente entende-se que o pouco
			período de tempo que os alunos passam no ambiente escolar, não é possível
			auxilia-los por completo em questão de sua atividade escolar para com seu
			desempenho acadêmico, em certos casos o aluno esconde sua dificuldade,
			dificultando o trabalho dos orientadores, onde por vezes o aluno omite
			o problema até mesmo de sua família, que ao passar do tempo acaba agravando
			a situação, em casos avançados, após a divulgação de menções semestrais,
			o aluno acaba se desmotivando, aumentando assim os casos de evasão escolar.
			Visto a necessidade da implementação de meios que facilitem a comunicação
			entre o estudante com dificuldades educacionais e os orientadores que possam
			lhe indicar meios para solucionar seus conflitos ou mesmo contatos de profissionais
			que lhe ofereçam os devidos tratamentos é o foco desse projeto, visando servir
			de ferramenta de uso no ambiente escolar, auxiliando funcionários que orientam
			os alunos emocionalmente, a agirem de forma mais eficaz, uma vez que não
			dependeriam unicamente da iniciativa do aluno, contando também com a ajuda
			de seus colegas e sua família para relatar situações problemas que acarretam
			em situações conflitantes ao ensino dos alunos e indica-lo para atendimento adequado.</p>
		<img src="img/cheshire_.png" height="100" width="150" alt="">
		<a href="#">
			<h4>Projeto Cheshire</h4>
		</a>
		<p>Aplicação web</p>
		<ul>
			<li><a href="https://www.facebook.com/etecdecotia/" target="_blank"><i></i></a></li>
			<li><a href="https://twitter.com/etecdecotia" target="_blank"><i></i></a></li>
			<li><a href="https://github.com/CesarAugst/Cheshire" target="_blank"><i></i></a></li>
		</ul>
		<p>Trata-se de uma aplicação que possibilita uma otimização na comunicação
			entreo orientador e aluno, possibilitando também a interação destes com
			a família e os demais funcionários e alunos do ambiente acadêmico, fornecendo
			assim um atendimento mais dinâmico e funcional.</p>
		<a href="#"><img src="img/blog/ads-banner.jpg" alt=""></a>
	</section>
	<footer>
			<img src="img/logo_cps.png">
				<p>Copyright &copy;<script>
						document.write(new Date().getFullYear());
					</script> Etec de Cotia
					<i class="fa fa-heart-o" aria-hidden="true"></i> by
					<a href="https://www.cps.sp.gov.br" target="_blank">Centro Paula Souza</a>
				</p>
				<a href="https://www.facebook.com/etecdecotia"><i class="fa fa-facebook"></i></a>
				<a href="https://twitter.com/etecdecotia"><i class="fa fa-twitter"></i></a>

	</footer>
</body>

</html>