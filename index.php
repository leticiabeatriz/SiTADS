<!DOCTYPE html>
<html>
<head>
	<title>I SiTADS</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,500" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700" rel="stylesheet">
	<script type="text/javascript" src="js/jquery.js"></script>

	<script type="text/javascript">

		$(document).ready(function(){
			$("#td2").hide();
			$("#d1").css({color: "white", background: "#F58634"});
			$("#d1").click(function(){
				$("#d1").css({color: "white", background: "#F58634"});
				$("#d2").css({color: "black", background: "#F0F2F6"});
				$("#td2").hide();
				$("#td1").show();
			});
			$("#d2").click(function(){
				$("#d2").css({color: "white", background: "#F58634"});
				$("#d1").css({color: "black", background: "#F0F2F6"});
				$("#td1").hide();
				$("#td2").show();
			});
		})
	</script>

</head>
<body>
	<header>
		<h1>CABEÇALHO</h1>
	</header>

	<section class="about">
		<span>
			<h2 id="detail">__</h2>
			<h2>SOBRE O EVENTO</h2>
			<p>Lorem ipsum tempus ornare hac conubia ante vulputate dolor tristique blandit rutrum, tellus dui ad felis ligula pulvinar fusce phasellus vivamus pulvinar lorem, etiam metus suscipit conubia lectus ornare platea adipiscing consectetur est. eros massa iaculis elementum ac pharetra gravida lorem, condimentum ultricies cras faucibus cursus eros habitant nullam, lobortis himenaeos at nisi ac tristique. semper adipiscing eu tempus egestas lacinia sollicitudin aptent est risus cursus ad litora fringilla orci, eu bibendum ultricies aliquet laoreet habitant euismod commodo pretium volutpat curabitur odio. ornare sed aptent phasellus torquent et nibh hac commodo, fringilla convallis interdum platea condimentum aliquam nulla laoreet eget, felis mi et blandit ut venenatis a.</p>
		</span>
		<div class="info_box">
			<div>
				<img src="media/notepad64.png">
				<h3>Minicursos</h3>
				<p>Lorem ipsum porta egestas mattis curabitur class vel, a tempor pharetra sed massa dictum, magna quam vulputate nisi tempus iaculis.</p>
				<a href="#">Ler mais</a>
			</div>
			<div>
				<img src="media/file64.png">
				<h3>Submissão de artigos acadêmicos</h3>
				<p>Lorem ipsum porta egestas mattis curabitur class vel, a tempor pharetra sed massa dictum, magna quam vulputate nisi tempus iaculis.</p>
				<a href="#">Ler mais</a>
			</div>
			<div>
				<img src="media/megaphone64.png">
				<h3>Palestras</h3>
				<p>Lorem ipsum porta egestas mattis curabitur class vel, a tempor pharetra sed massa dictum, magna quam vulputate nisi tempus iaculis.</p>
				<a href="#">Ler mais</a>
			</div>
			<div>
				<img src="media/creativity64.png">
				<h3>Apresentação de pesquisas</h3>
				<p>Lorem ipsum porta egestas mattis curabitur class vel, a tempor pharetra sed massa dictum, magna quam vulputate nisi tempus iaculis.</p>
				<a href="#">Ler mais</a>
			</div>
		</div>
	</section>

	<section class="schedule">
		<span>
			<div id="d1">DIA 1</div>
			<div id="d2">DIA 2</div>
		</span>
		<span>
			<table id="td1">
				<tr id="td_title">
					<td colspan="2">TERÇA FEIRA - 22/11</td>
				</tr>
				<tr>
					<td id="data">08
						<span>00H</span>
					</td>
					<td>
						<h2>Nome da atividade</h2>
						<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis quam venenatis, facilisis augue vitae, aliquet urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</h3>
						<h4><img src="media/local.png">Local: Auditório</h4>
					</td>
				</tr>
			</table>
			<table id="td2">
				<tr id="td_title">
					<td colspan="2">QUARTA FEIRA - 23/11</td>
				</tr>
				<tr>
					<td id="data">08
						<span>00H</span>
					</td>
					<td>
						<h2>Nome da atividade</h2>
						<h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam quis quam venenatis, facilisis augue vitae, aliquet urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</h3>
						<h4><img src="media/local.png">Local: Auditório</h4>
					</td>
				</tr>
			</table>
		</span>
	</section>

	<section class="pre_footer">
		<span>
			<div class="contact">
				<h2>SITADS</h2>
				<h3>__</h3>
				<p>
					Lorem ipsum dolor sit amet consetur adipiscing elit curabitur. sit amet molestie velit. Duis tincidunt leo id faucibus sagittis. Duis.<br/><br/>
					<img src="media/map_white.png">IFRN, Nova Cruz-RN<br/><br>
					<img src="media/calendar.png">20-21 de Novembro<br/><br>
					<img src="media/mail.png">carlos.deyvinson@ifrn.edu.br
				</p>
			</div>
			<div class="news">
				<h2>Últimas Notícias</h2>
				<h3>__</h3>
				
				<div>
					<img src="media/news1.jpg">
					<span>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
					<p><img src="media/clock.png">10 Out, 2018</p>
					</span>
				</div>
				<div>
					<img src="media/news2.jpg">
					<span>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
					<p><img src="media/clock.png">15 Out, 2018</p>
					</span>
				</div>
				<div>
					<img src="media/news3.jpeg">
					<span>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
					<p><img src="media/clock.png">16 Out, 2018</p>
					</span>
				</div>

			</div>
			<div class="galery">
				<h2>Galeria</h2>
				<h3>__</h3>
				
			</div>
		</span>
	</section>

	<footer>
		<p>Template made by Leticia Beatriz ©</p>
		<span>
			<a href="https://plus.google.com/107682289596390682260"><img src="media/google_plus.png"></a>
			<a href="https://www.facebook.com/leticia.beatriz.7796"><img src="media/facebook.png"></a>
		</span>
	</footer>
</body>
</html>