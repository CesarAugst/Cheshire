<?php
//iniciando a sessão
session_start();
//destruindo a sessão
session_destroy();
//Redireciona
//o utilizador depois da destruição da sessão...
header("Location: ../FRONT/pag_login.php");

