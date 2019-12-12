
<?php
include 'global/config.php';
include 'templates/cabecera_anteslogin.php';
?>
	<link href="css/style.css" rel="stylesheet">
	<link href="css/default.css" rel="stylesheet">
	<link rel="shortcut icon" href="img/icon.ico">
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.2/dist/leaflet.css" />
    

	<!-- Header area -->
	<div id="header-wrapper" class="header-slider">
		<header class="clearfix">
			<div class="logo">
				<img src="img/general.png" alt="" width="10%" />
			</div>
			<div class="container">
				<div class="row">
					<div class="span12">
						<div id="main-flexslider" class="flexslider">
							<ul class="slides">
								<li>
									<p class="home-slide-content">
										<strong>creativos</strong> pasion
									</p>
								</li>
								<li>
									<p class="home-slide-content">
										diseño<strong>tecnologia</strong>
									</p>
								</li>
								<li>
									<p class="home-slide-content">
										amamos la <strong>simplicidad</strong>
									</p>
								</li>

							</ul>
						</div>
						<!-- end slider -->
					</div>
				</div>
			</div>
		</header>
	</div>
	<!-- spacer section -->
	<section class="spacer green">
		<div class="container">
			<div class="row">
				<div class="span6 alignright flyLeft">
					<blockquote class="large">
						Las cosas no se hacen siguiendo caminos distintos para que no sean iguales, sino para que sean mejores <cite>Elon Musk</cite>
					</blockquote>
				</div>
				<div class="span6 aligncenter flyRight">
					<i class="icon-rocket icon-10x"></i>
				</div>
			</div>
		</div>
	</section>
	<!-- end spacer section -->
	<!-- section: team -->
	<section id="about" class="section">
		<div class="container">
			<h4>¿Quien somos?</h4>
			<div class="row">
				<div class="span4 offset1">
					<div>
						<h2>Ayudando a las <strong>personas</strong></h2>
						<p>
							Este proyecto nace con la finalidad de poder hacer más fácil e incluso divertido el día a día de las personas. Las tecnologías son la herramienta perfecta para automatizar tareas y puede ser empleado como medio en el que apoyarse en el día a día. Tachbot es un proyecto que busca precisamente esto y para ello el equipo pone todo su corazón y dedicación.
						</p>
					</div>
				</div>
				<div class="span6">
					<div class="aligncenter">
						<img src="img/icons/creativity.png" alt="" />
					</div>
				</div>
			</div>
			<div class="row">
				<div class="span2 offset1 flyIn">
					<div class="people">
						<img class="team-thumb img-circle" src="img/team/juan.jpg" alt="" />
						<h3>Juan Pablo Egido</h3>
						<p>
							Desarrollo Web
						</p>
					</div>
				</div>
				<div class="span2 flyIn">
					<div class="people">
						<img class="team-thumb img-circle" src="img/team/rocio.jpg" alt="" />
						<h3>Rocio Saelices</h3>
						<p>
							Diseño UI
						</p>
					</div>
				</div>
				<div class="span2 flyIn">
					<div class="people">
						<img class="team-thumb img-circle" src="img/team/paloma.jpg" alt="" />
						<h3>Paloma Sánchez</h3>
						<p>
							Desarrollo Web
						</p>
					</div>
				</div>
				<div class="span2 flyIn">
					<div class="people">
						<img class="team-thumb img-circle" src="img/team/shioato.jpg" alt="" />
						<h3>Rocio  Diéguez</h3>
						<p>
							Diseño UI
						</p>
					</div>
				</div>
			</div>
		</div>
		<!-- /.container -->
	</section>
	<!-- end section: team -->
	<!-- section: services -->
	<section id="services" class="section orange">
		<div class="container">
			<h4>Servicios</h4>
			<!-- Four columns -->
			<div class="row">
				<div class="col-3">
					<div class="service-box">
						<img src="img/mayor.png" alt="" width="70%"/>
						<h2>Personas mayores</h2>
						<p>
							Incluye aquellas funcionalidades que hacen la vida más fácil a nuestros mayores: recordatorio toma de medicamentos, alarmas, etc.
						</p>
					</div>
				</div>
				<div class="col-3">
					<div class="service-box">
						<img src="img/general.png" alt="" width="70%"/>
						<h2>Público general</h2>
						<p>
							De forma muy cómoda podrá traducir al idioma deseado aquellas palabras/frases que desee. Entre otras funcionalidades.
						</p>
					</div>
				</div>
				<div class="col-3">
					<div class="service-box">
						<img src="img/joven.png" alt="" width="70%"/>
						<h2>Para los más peques</h2>
						<p>
							Seré tu pequeño juguete, podrás configurarme según superes unos niveles e iré progresando con el paso del tiempo.
						</p>
					</div>
				</div>
				<div class="col-3">
					<div class="service-box">
						<img src="img/ecommerce.png" alt="" width="70%"/>
						<h2>Potencia tu proyecto eCommerce</h2>
						<p>
							Utiliza esta maravillosa herramienta para potenciar tu e-commerce. 
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end section: services -->
	<!-- section: works -->
	<section id="works" class="section">
		<div class="container clearfix">
			<h4>Aviso legal</h4>
			<!-- portfolio filter -->
			<div class="row">
				<div id="filters" class="span12">
					<ul class="clearfix">
						<li>
							<a href="#" data-filter="*" class="active">
								<h5>All</h5>
							</a>
						</li>
						<li>
							<a href="#" data-filter=".web">
								<h5>Web</h5>
							</a>
						</li>
						<li>
							<a href="#" data-filter=".print">
								<h5>Print</h5>
							</a>
						</li>
						<li>
							<a href="#" data-filter=".design">
								<h5>Design</h5>
							</a>
						</li>
						<li>
							<a href="#" data-filter=".photography">
								<h5>Photography</h5>
							</a>
						</li>
					</ul>
				</div>
				<!-- END PORTFOLIO FILTERING -->
			</div>
			<div class="row">
				<div class="span12">
					<div id="portfolio-wrap">
						<!-- portfolio item -->
						<div class="portfolio-item grid print photography">
							<div class="portfolio">
								<a href="img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="img/works/1.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Portfolio name</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
							</div>
						</div>
						<!-- end portfolio item -->
						<!-- portfolio item -->
						<div class="portfolio-item grid print design web">
							<div class="portfolio">
								<a href="img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="img/works/2.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Portfolio name</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
							</div>
						</div>
						<!-- end portfolio item -->
						<!-- portfolio item -->
						<div class="portfolio-item grid print design">
							<div class="portfolio">
								<a href="img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="img/works/3.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Portfolio name</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
							</div>
						</div>
						<!-- end portfolio item -->
						<!-- portfolio item -->
						<div class="portfolio-item grid photography web">
							<div class="portfolio">
								<a href="img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="img/works/4.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Portfolio name</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
							</div>
						</div>
						<!-- end portfolio item -->
						<!-- portfolio item -->
						<div class="portfolio-item grid photography web">
							<div class="portfolio">
								<a href="img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="img/works/5.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Portfolio name</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
							</div>
						</div>
						<!-- end portfolio item -->
						<!-- portfolio item -->
						<div class="portfolio-item grid photography web">
							<div class="portfolio">
								<a href="img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="img/works/6.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Portfolio name</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
							</div>
						</div>
						<!-- end portfolio item -->
						<!-- portfolio item -->
						<div class="portfolio-item grid photography web">
							<div class="portfolio">
								<a href="img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="img/works/7.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Portfolio name</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
							</div>
						</div>
						<!-- end portfolio item -->
						<!-- portfolio item -->
						<div class="portfolio-item grid photography">
							<div class="portfolio">
								<a href="img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="img/works/8.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Portfolio name</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
							</div>
						</div>
						<!-- end portfolio item -->
						<!-- portfolio item -->
						<div class="portfolio-item grid photography web">
							<div class="portfolio">
								<a href="img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="img/works/9.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Portfolio name</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
							</div>
						</div>
						<!-- end portfolio item -->
						<!-- portfolio item -->
						<div class="portfolio-item grid design web">
							<div class="portfolio">
								<a href="img/works/big.jpg" data-pretty="prettyPhoto[gallery1]" class="portfolio-image">
						<img src="img/works/10.png" alt="" />
						<div class="portfolio-overlay">
							<div class="thumb-info">
								<h5>Portfolio name</h5>
								<i class="icon-plus icon-2x"></i>
							</div>
						</div>
						</a>
							</div>
						</div>
						<!-- end portfolio item -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- spacer section -->
	<section class="spacer bg3">
		<div class="container">
			<div class="row">
				<div class="span12 aligncenter flyLeft">
					<blockquote class="large">
						Somos una agencia web establecida y confiable con una reputación de compromiso y alta integridad.
					</blockquote>
				</div>
			</div>
		</div>
	</section>
	<!-- end spacer section -->
	<!-- section: blog -->
	<section id="blog" class="section">
		<div class="container" align="center">
			<h4>¿Donde nos encontramos?</h4>
			<!-- Three columns -->
			<div id='map' style="width: 600px; height: 400px;">
			</div>
		</div>
	</section>

	<!-- end spacer section -->
	<!-- section: contact -->
	<section id="contact" class="section green">
		<div class="container">
			<h4>Get in Touch</h4>
			<p>
				Reque facer nostro et ius, cu persius mnesarchum disputando eam, clita prompta et mel vidisse phaedrum pri et. Facilisis posidonium ex his. Mutat iudico vis in, mea aeque tamquam scripserit an, mea eu ignota viderer probatus. Lorem legere consetetur ei
				eum. Sumo aeque assentior te eam, pri nominati posidonium consttuam
			</p>
			<div class="blankdivider30">
			</div>
			<div class="row">
				<div class="span12">
					<div class="cform" id="contact-form">
						<div id="sendmessage">Your message has been sent. Thank you!</div>
						<div id="errormessage"></div>
						<form action="" method="post" role="form" class="contactForm">
							<div class="row">
								<div class="span6">
									<div class="field your-name form-group">
										<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
										<div class="validation"></div>
									</div>
									<div class="field your-email form-group">
										<input type="text" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
										<div class="validation"></div>
									</div>
									<div class="field subject form-group">
										<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
										<div class="validation"></div>
									</div>
								</div>
								<div class="span6">
									<div class="field message form-group">
										<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
										<div class="validation"></div>
									</div>
									<input type="submit" value="Send message" class="btn btn-theme pull-left">
								</div>
							</div>
						</form>
					</div>
				</div>
				<!-- ./span12 -->
			</div>
		</div>
	</section>
	<footer>
		<div class="container">
			<div class="row">
				<div class="span6 offset3">
					<ul class="social-networks">
						<li><a href="#"><i class="icon-circled icon-bgdark icon-instagram icon-2x"></i></a></li>
						<li><a href="#"><i class="icon-circled icon-bgdark icon-twitter icon-2x"></i></a></li>
						<li><a href="#"><i class="icon-circled icon-bgdark icon-dribbble icon-2x"></i></a></li>
						<li><a href="#"><i class="icon-circled icon-bgdark icon-pinterest icon-2x"></i></a></li>
					</ul>
					<p class="copyright">
						&copy; Tachbot 2019.
						<div class="credits">
							<!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Maxim
              -->
							
						</div>
					</p>
				</div>
			</div>
		</div>
		<!-- ./container -->
	</footer>
	<a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bgdark icon-2x"></i></a>
	<script src="js/jquery.js"></script>
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/jquery.nav.js"></script>
	<script src="js/jquery.localScroll.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/isotope.js"></script>
	<script src="js/jquery.flexslider.js"></script>
	<script src="js/inview.js"></script>
	<script src="js/animate.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/contactform.js"></script>
	<script src="https://unpkg.com/leaflet@1.0.2/dist/leaflet.js"></script>
	
	<!--JS del mapa 'donde estamos', carga el mapa según DOM (id map)-->
	<script>
			var map = L.map('map').
			setView([38.9942400, -1.8564300], 
			13);
			
			L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
				attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
				maxZoom: 18
			}).addTo(map);
			
			L.control.scale().addTo(map);
			//L.marker([38.9942400, -1.8564300], {draggable: true}).addTo(map);	
		    L.marker([38.9942400, -1.8564300]).addTo(map).bindPopup("<b>Sede principal Tachbot").openPopup();
			
	</script>
 

</body>

</html>