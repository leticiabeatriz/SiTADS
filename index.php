<!DOCTYPE html>
<html>

	<head>
		<title>SiTADS</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,500" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/map.js"></script>

		<script type="text/javascript">
			$(document).ready(function () {
				$('#lo_or').hide();
				$('#sch_d2').hide();

				$("#btn_dia1").click(function(){
					$("#btn_dia1").css({color: "white", background: "#DB6638"});
					$("#btn_dia1 span").css({color: "white"});
					$("#btn_dia2").css({color: "#DB6638", background: "white"});
					$("#btn_dia2 span").css({color: "#ccc"});
					$('#sch_d2').hide();
					$('#sch_d1').show();
				});
				$("#btn_dia2").click(function(){
					$("#btn_dia2").css({color: "white", background: "#DB6638"});
					$("#btn_dia2 span").css({color: "white"});
					$("#btn_dia1").css({color: "#DB6638", background: "white"});
					$("#btn_dia1 span").css({color: "#ccc"});
					$('#sch_d1').hide();
					$('#sch_d2').show();
				});

					//rolagem da página para tópicos
					$('#home').click(function() {
						var mw = 93;
						$('html, body').animate({
							scrollTop: $("header").offset().top - mw
						}, 1000)
					}); 

					$('#about').click(function() {
						var mw = 93;
						$('html, body').animate({
							scrollTop: $(".about").offset().top - mw
						}, 1000)
					});

					$('#contact').click(function() {
						var mw = 93;
						$('html, body').animate({
							scrollTop: $(".pre_footer").offset().top - mw
						}, 1000)
					});

					$('#mopesq, #moext').click(function() {
						var mw = 93;
						$('html, body').animate({
							scrollTop: $(".mopext").offset().top - mw
						}, 1000)
					});

					$('#schedule').click(function() {
						var mw = 93;
						$('html, body').animate({
							scrollTop: $(".schedule").offset().top - mw
						}, 1000)
					});

					$('header span').hover(
						function () {
							$('header span table, header span img').css({"opacity":"1.0"});
						}, 
						
						function () {
							$('header span table, header span img').css({"opacity":"0.6"});
						}
						);

					$(function(){   
						var countDownDate = new Date("Nov 20, 2018 08:00:00").getTime();

						var x = setInterval(function() {

							var now = new Date().getTime();			    
							var distance = countDownDate - now;

							var days = Math.floor(distance / (1000 * 60 * 60 * 24));
							var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
							var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
							var seconds = Math.floor((distance % (1000 * 60)) / 1000);
							
							if (days < 10) {
								document.getElementById("pdia").innerHTML = "0" + days;
							}else if(days > 10){
								document.getElementById("pdia").innerHTML = days;
							}

							if (hours < 10) {
								document.getElementById("phor").innerHTML = "0" + hours;
							}else if(hours > 10){
								document.getElementById("phor").innerHTML = hours;
							}

							if (minutes < 10) {
								document.getElementById("pmin").innerHTML = "0" + minutes;
							}else if(minutes > 10){
								document.getElementById("pmin").innerHTML = minutes;
							}

							if (seconds < 10) {
								document.getElementById("psec").innerHTML = "0" + seconds;
							}else if(seconds > 10){
								document.getElementById("psec").innerHTML = seconds;
							}

						}, 1000);
					});	
				});

			$(function(){   
				var nav = $('#menu');   
				
				$(window).scroll(function () { 
					if ($(this).scrollTop() > 10) { 
						nav.addClass("navHeader");
						$('nav span ul li').css('color', '#DB6638');
						$('#lo_wi').hide();
						$('#lo_or').show();
					} else { 
						nav.removeClass("navHeader"); 
						$('nav span ul li').css('color', 'white');
						$('#lo_or').hide();
						$('#lo_wi').show();
					} 
				});
			});

			$(window).on('load', function () {
				$('#loadingMask').hide();
			});
		</script>

	</head>

	<body>
		<div id="loadingMask"><div class="loader"></div></div>
		<nav id="menu">
			<span>
				<img id="lo_wi" src="media/img/logo_white.png">
				<img id="lo_or" src="media/img/logo_orange.png">
				<ul>
					<li id="home">INICIO</li>
					<li id="about">EVENTO</li>
					<li id="schedule">PROGRAMAÇÃO</li>
					<!--<li>PALESTRANTES</li>-->
					<li id="contact">CONTATO</li>
				</ul>
			</span>
		</nav>
		<header>
			<span>
				<img src="media/img/logo_media.png">
				<table>
					<tr class="valor">
						<td id="pdia"></td>
						<td id="phor"></td>
						<td id="pmin"></td>
						<td id="psec"></td>
					</tr>
					<tr class="tipo">
						<td>DIAS</td>
						<td>HORAS</td>
						<td>MINUTOS</td>
						<td>SEGUNDOS</td>
					</tr>
				</table>
			</span>
		</header>
		<section class="about">
			<div class="data_hora">
				<div>
					<img src="media/img/calendar54.png">
					<p><span>DATA</span><br>20-21 DE NOVEMBRO</p>
				</div>
				<div>
					<img src="media/img/map54.png">
					<p><span>LOCAL</span><br>CAMPUS IFRN NOVA CRUZ</p>
				</div>
			</div >
			<span>
				<h2 id="detail">__</h2>
				<h2>SOBRE O EVENTO</h2>
				<p>O SiTADS, IV encontro de informática do IFRN Campus Nova Cruz, tem por objetivo fomentar a T.I. na região, apresentar e discutir o surgimento das novas tecnologias em Analise e Desenvolvimento de Sistemas, contando com a apresentação de palestras, mesas redondas, minicursos, entre outros assuntos relevantes a atuação em TI. Este ano o evento contará com dois subeventos: <span id="moext">MOEXT</span> e <span id="mopesq">MOPESQ</span>. O evento acontecerá nos dias 20 e 21 de novembro de 2018, nas dependências do Campus IFRN Nova Cruz/RN. As inscrições individuais estarão disponíveis em breve. Fique atendo!</p>
			</span>
		</section>
		<section class="mopext">
			<span>
				<h2 id="detail">__</h2>
				<h2>MOEXT E MOPESQ</h2>
				<p>A I Mostra de pesquisa e extensão em TI do IFRN - Campus Nova Cruz têm como objetivo fortalecer e divulgar as ações de Pesquisa e Extensão  desenvolvidas na área de TI, a medida em que partilha a reflexão das experiências desenvolvidas no campus Nova Cruz. É um espaço de apresentação dos projetos e programas desenvolvidos, podendo fortalecer ou traçar novos projetos de pesquisa e extensão a serem implementadas pelos docentes e discentes da área tecnológica do IFRN campus Nova Cruz.</p>
			</span>
		</section>
		<section class="schedule">
			<div class="title_sch">
				<h2 id="detail">__</h2>
				<h2>PROGRAMAÇÃO</h2>
			</div>
			<div class="btns_dia">
				<div id="btn_dia1">DIA 1<br><span>20/11/18</span></div>
				<div id="btn_dia2">DIA 2<br><span>21/11/18</span></div>
			</div>
			<div class="sch_wrap" id="sch_d1">
				<div class="sch_item">
					<p><img src="media/img/clock_gray.png">08:00h - 09:00h</p>
					<h2>Credenciamento</h2>
				</div>
				<div class="sch_item">
					<p><img src="media/img/clock_gray.png">09:00h - 10:00h</p>
					<h2>Abertura</h2>
					<p><span>Abertura do I Simpósio de TADS do Agreste Potiguar, I Mostra de extensão e I Mostra de pesquisa em TI do IFRN - Campus Nova Cruz.</span></p>
				</div>
				<div class="sch_item">
					<p><img src="media/img/clock_gray.png">10:00h - 12:00h</p>
					<h2>Mesa redonda sobre Software Livre</h2>
					<p><span>Ministrada por Lucas Vieira de Souza, Maria Jane de Queiroz  e Ana Eliza Trajano Soares</span></p>
				</div>
				<div class="sch_item">
					<p><img src="media/img/clock_gray.png">14:00h - 18:00h</p>
					<h2>Minicursos</h2>
					<p><span>Em Breve: Lista e cadastramento</span></p>
				</div>
				<div class="sch_item">
					<p><img src="media/img/clock_gray.png">19:00h - 22:00h</p>
					<h2>Minicursos</h2>
					<p><span>Em Breve: Lista e cadastramento</span></p>
				</div>
			</div>
			<div class="sch_wrap" id="sch_d2">
				<div class="sch_item">
					<p><img src="media/img/clock_gray.png">08:00h - 12:00h</p>
					<h2>MOEXT</h2>
					<p><span>I Mostra de extensão em TI do IFRN - Campus Nova Cruz</span></p>
				</div>
				<div class="sch_item">
					<p><img src="media/img/clock_gray.png">08:00h - 12:00h</p>
					<h2>MOPESQ</h2>
					<p><span>I Mostra de pesquisa em TI do IFRN - Campus Nova Cruz</span></p>
				</div>
				<div class="sch_item">
					<p><img src="media/img/clock_gray.png">14:00h - 15:00h</p>
					<h2>Palestra: Um relato de um profissional de TI</h2>
					<p><span>Por Bruno Neiva Moreno</span></p>
				</div>
				<div class="sch_item">
					<p><img src="media/img/clock_gray.png">15:00h - 16:00h</p>
					<h2>Palestra: Perspectivas na área de Informática</h2>
					<p><span>Por Cleverton Hentz Antunes</span></p>
				</div>
				<div class="sch_item">
					<p><img src="media/img/clock_gray.png">16:00h - 17:00h</p>
					<h2>Palestra</h2>
					<p><span>Mais informações em breve</span></p>
				</div>
				<div class="sch_item">
					<p><img src="media/img/clock_gray.png">17:00h</p>
					<h2>Encerramento</h2>
				</div>
			</div>
		</section>
		<section class="map">
			<iframe 
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.402603933604!2d-35.44712958563709!3d-6.470577765065606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ad8e45582610c5%3A0x93c23ac1dcf801d7!2sInstituto+Federal+de+Educa%C3%A7%C3%A3o%2C+Ci%C3%AAncia+e+Tecnologia+Rio+Grande+do+Norte%2C+Campus+Nova+Cruz!5e0!3m2!1spt-BR!2sbr!4v1539462111504" frameborder="0" style="border:0" allowfullscreen>	
			</iframe>
		</section>
		<section class="pre_footer">
			<span>
				<div class="contact">
					<h2>SITADS</h2>
					<h3>__</h3>
					<p>
						<img src="media/img/map_white.png">IFRN, Nova Cruz-RN<br/><br>
						<img src="media/img/calendar.png">20-21 de Novembro<br/><br>
						<img src="media/img/mail.png">Contato: carlos.deyvinson@ifrn.edu.br
					</p>
				</div>
			</span>
		</section>
		<footer>
			<p>Todos os direitos reservatos. Template by Letícia Beatriz ©. Powered by IFRN</p>
			<span>
				<a href="https://plus.google.com/107682289596390682260"><img src="media/img/google_plus.png"></a>
				<a href="https://www.facebook.com/leticia.beatriz.7796"><img src="media/img/facebook.png"></a>
			</span>
		</footer>
	</body>
</html>