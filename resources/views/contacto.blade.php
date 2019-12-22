<!DOCTYPE html>
<html">
<head>
    <!-- charset -->
    <meta charset="utf-8">
	
    <!-- responsive web -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Pagina oficial del equipo profesional de deportes electrónicos Horizon Gaming">
    <meta name="author" content="Alkayzer - Marcelo Pérez Britos">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="Horizon Gaming" /> <!-- website name -->
	<meta property="og:site" content="https://Horizongaming.com.ar/" /> <!-- website link -->
	<meta property="og:title" content="Horizon Gaming"/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="Pagina oficial del equipo profesional de deportes electrónicos Horizon Gaming" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Horizon Gaming</title>

	<!-- Favicon  -->
    <link rel="icon" href="images/logo.png">
    
    <!-- Styles -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/index.css') }}" rel="stylesheet">
	<link href="{{ asset('css/contacto.css')}}" rel="stylesheet">

</head>
<body>
<!-- Preloader -->
<div class="spinner-wrapper">
	<div class="spinner">
		<div class="bounce1"></div>
		<div class="bounce2"></div>
		<div class="bounce3"></div>
	</div>
</div>
<!-- end of preloader -->

<div id="app">

<nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="#">
    <img src="{{asset('img/hzg.png')}}" width="100" height="40" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="container-hamburguer" onclick="myFunction(this)">
	<div class="bar1"></div>
	<div class="bar2"></div>
	<div class="bar3"></div>
	</span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav snip1189">
      <li class="nav-item">
        <a class="nav-link active" href="{{url('')}}">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('nosotros')}}">Nosotros</a>
	  </li>
	  <li class="nav-item">
        <a class="nav-link" href="{{url('esports')}}">Esports</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('contacto')}}">Contacto</a>
      </li>
	</ul>
  </div>
	<div>
		<ul class="navbar-nav navbar-right">
			<a href="https://www.facebook.com/HorizonGamingOfficial/" target="_blank"><i class="fa fa-facebook-f icons fb btn-social"></i></a>
			<a href="https://www.instagram.com/horizongamingofficial/" target="_blank"><i class="fa fa-instagram icons ins btn-social"></i></a>
			<a href="https://www.twitch.tv/HZGesports/" target="_blank"><i class="fa fa-twitch icons twitch btn-social"></i></a>
			<a href="https://youtube.com/HZGesports/" target="_blank"><i class="fa fa-youtube icons yt btn-social"></i></a>
			<a href="https://twitter.com/HZGesports/" target="_blank"><i class="fa fa-twitter icons tw btn-social"></i></a>
		</ul>
	</div>
</nav>
<!--fin navbar-->



<div class="container-fluid content">
	<div class="row">
		<div class="col-sm">
		</div>
		<div class="col-sm">
			<span class="form-title">Contacto Ágil</span>
			<div class="contact-panel">	
					<div class="contact-box">
						<div class="contact-box-inner">
							<h3 class="contact-title">Asociación y Publicidad</h3>
							<a class="contact-link" id="linkz" href="mailto:partners@horizongaming.com.ar">partners@horizongaming.com.ar</a>
						</div>
					</div>
					<div class="contact-box">
						<div class="contact-box-inner">
							<h3 class="contact-title">Consultas Administrativa</h3>
							<a class="contact-link" id="linkz" href="mailto:contact@horizongaming.com.ar">contact@horizongaming.com.ar</a>
						</div>
					</div>
					<div class="contact-box">
						<div class="contact-box-inner">
							<h3 class="contact-title">Consultas Generales</h3>
							<a class="contact-link" id="linkz" href="mailto:support@horizongaming.com.ar">support@horizongaming.com.ar</a>
						</div>
					</div>
			</div>
		</div>
		<div class="col-sm">
		</div>
	</div>
</div>







<div style="text-align: center;">
	<span class="form-title">
		Formulario de Contacto
    </span>
</div>

<div class="centering-form">
<form class="col-md-6 form-contact">
	<div class="row">
		<div class="form-group col-md-6">
			<label for="">Nombre</label>
			<input type="text" class="form-control" id="" placeholder="Ingrese su nombre...">
		</div>
		<div class="form-group col-md-6">
			<label for="">Apellido</label>
			<input type="text" class="form-control" id="" placeholder="Ingrese su apellido...">
		</div>
	</div>
	<div class="form-group">
		<label>Correo Electrónico</label>
		<input type="email" class="form-control" id="" placeholder="Ingrese su email...">
	</div>
	<div class="row">
		<div class="form-group col-md-8">
			<label>Número Telefónico</label>
			<div class="form-group row" style="margin-left:0.5px">
			<input type="text" class="form-control col-md-3 mr-3" id="" maxlenght="10" minlenght="10" placeholder="cod Area">
			<input type="text" class="form-control col-md-7" id="" maxlenght="10" minlenght="10" placeholder="Numero de celular">
			</div>
		</div>
		<div class="form-group col-md-4">
			<label for="">Asunto</label>
			<select class="form-control" id="">
				<option value="" selected disabled hidden>Seleccione Asunto</option>
				<option value="1">Asociación</option>
				<option value="2">Tienda</option>
				<option value="3">Administrativo</option>
				<option value="4">Unete al Team</option>
				<option value="5">Otro</option>
			</select>
		</div>
	</div>
	<div class="form-group">
		<label for="exampleFormControlTextarea1">Mensaje</label>
		<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Ingrese su mensaje aquí..."></textarea>
	</div>

	<div class="form-group button">	
		<div class="svg-wrapper">
			<svg height="40" width="150" xmlns="http://www.w3.org/2000/svg">
				<rect id="shape" height="40" width="150" />
				<div id="text">
				<a href=""><span class="spot"></span>Enviar</a>
				</div>
			</svg>
		</div>
	</div>
	</form>
</div>

<!--comienzo footer-->
<footer class="container-fluid footer solid-bg py-4">
<div class="container-fluid footer">
<div class="container-fluid">
  <div class="row">
    <div class="col-2">
		<img class="logo-footer" src="{{asset('img/logo.png')}}">
	</div>
	<div class="col-2">
	<ul class="ul-footer">
		<span class="column-footer">TIENDA</span>
			<li class="nav-item">
				<a class="link-footer" href="#">Camisetas</a>
			</li>
			<li class="nav-item">
				<a class="link-footer" href="#">Periféricos</a>
			</li>
			<li class="nav-item">
				<a class="link-footer" href="#">Accesorios</a>
			</li>
		</ul>
    </div>
    <div class="col-2">
	<ul class="ul-footer">
		<span class="column-footer">EXTRA</span>
			<li class="nav-item">
				<a class="link-footer" href="#">Nosotros</a>
			</li>
			<li class="nav-item">
				<a class="link-footer" href="#">Sponsors</a>
			</li>
			<li class="nav-item">
				<a class="link-footer" href="#">Noticias</a>
			</li>
			<li class="nav-item">
				<a class="link-footer" href="#">Torneos</a>
			</li>
		</ul>
    </div>
    <div class="col-2">
	<ul class="ul-footer">
			<span class="column-footer">SOCIAL</span>
			<li class="nav-item">
				<a class="link-footer" href="#">Instagram</a>
			</li>
			<li class="nav-item">
				<a class="link-footer" href="#">Facebook</a>
			</li>
			<li class="nav-item">
				<a class="link-footer" href="#">Twitter</a>
			</li>
			<li class="nav-item">
				<a class="link-footer" href="#">Twitch</a>
			</li>
			<li class="nav-item">
				<a class="link-footer" href="#">Youtube</a>
			</li>
		</ul>
	</div>
	<div class="col-2">
	<ul class="ul-footer">
			<span class="column-footer">AYUDA</span>
			<li class="nav-item">
				<a class="link-footer" href="#">¡Unete!</a>
			</li>
			<li class="nav-item">
				<a class="link-footer" href="#">Soporte</a>
			</li>
			<li class="nav-item">
				<a class="link-footer" href="#">Contacto</a>
			</li>
		</ul>
    </div>
  </div>
</div>
<span class="derechos">Horizon Gaming © | Todos los derechos reservados.</span>
</div>
</footer>

<!--fin footer-->

</div>
</body> 
	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>
	<script src="{{ asset('js/index.js') }}" defer></script>
	<script src="{{ asset('js/font-awesome.js') }} " defer></script>
	<script src="{{ asset('js/jquery.nivo.slider.js') }}" defer></script>
</html>

