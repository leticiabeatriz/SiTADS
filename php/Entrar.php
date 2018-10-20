<!DOCTYPE html>
<html>
<head>
	<title>Entrar - SITADS</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/entrar.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
	<script type="text/javascript" src="../js/jquery.js"></script>

	<script type="text/javascript">
		
		$(document).ready(function(){
			$(".login").hide();

			$("#login_tab").click( function(){
				$(".register").hide();
				$(".login").show();
				$("#register_tab").addClass("hide_register_tab");
				$("#login_tab").removeClass("hide_login_tab");
			});
			$("#register_tab").click( function(){
				$(".login").hide();
				$(".register").show();
				$("#register_tab").removeClass("hide_register_tab");
				$("#login_tab").addClass("hide_login_tab");
			});
		});
		$(window).on('load', function () {
			$('#loadingMask').hide();
		});

	</script>
</head>
<body>
	<div id="loadingMask"><div class="loader"></div></div>
	<header>
		<img src="../media/img/logo_blue.png">
	</header>
	<div class="containter">
		<div class="tab">
			<div id="register_tab" >CRIAR CONTA</div>
			<div id="login_tab" class="hide_login_tab">ENTRAR</div>
		</div>
		<div class="content">
			<div class="register">
				<h2>Crie sua conta</h2>
				<p>Sua conta é seu portal de acesso a tudo no envento: Minicursos, cronograma do evento, submissão de trabalhos e muito mais!</p>
				<form method="POST" action="../negocio/services/casdastrarInscrito.php">
					<input class="left" type="text" name="nome" autocomplete="off" placeholder="Nome*" required="">
					<input class="right" type="text" name="sobrenome" autocomplete="off" placeholder="Sobrenome*" required="">
					<input class="full" type="text" name="cpf" autocomplete="off" placeholder="CPF, apenas números*" required="" maxlength = "11" minlength="11">
					<input class="full" type="email" name="email" autocomplete="off" placeholder="Email*" required="">
					<input class="left" type="password" name="senha" autocomplete="off" placeholder="Senha*" required="">
					<input class="right" type="password" name="conSenha" autocomplete="off" placeholder="Confirmar senha*" required="">
					<input class="" type="submit" name="" value="Criar conta">
				</form>
			</div>
			<div class="login">
				<h2>Acesse sua conta</h2>
				<p>Sua conta é seu portal de acesso a tudo no envento: Minicursos, cronograma do evento, submissão de trabalhos e muito mais!</p>
				<form method="POST" action="../negocio/services/logarInscrito.php">
					<input type="email" name="email" autocomplete="off" placeholder="Email" required="">
					<input type="password" name="senha" autocomplete="off" placeholder="Senha" required="">
					<input class="" type="submit" name="" value="Entrar">
				</form>
				<span>
					<h3><a href="../negocio/services/recuperarInscrito.php">Esqueceu sua senha?</a></h3>
				</span>
			</div>
		</div>
	</div>
</body>
</html>