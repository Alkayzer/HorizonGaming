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
	<link href="{{ asset('css/esports.css')}}" rel="stylesheet">
	<link href="{{ asset('css/cards.css')}}" rel="stylesheet">
	
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


<!--navbar-->
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




<div class="container-fluid header">
    <div id="header" class="row">
        <div class="col-md-6 left">
            <div class="centering1">
            <span class="lol1">League of Legends</span><span class="lol2">Oficial</span>
            </div>
        </div>
        <div class="col-md-6 right">
            <div class="centering2">
            <span class="lol1">League of Legends</span><span class="lol2">Academy</span>
            </div>
        </div>
    </div>
</div>



<div class="container-fluid">
	<div class="">
		<div class="roster-oficial-div">
			<span class="roster-oficial-span">Roster Oficial</span>
			<div>

				<img src="https://vignette.wikia.nocookie.net/leagueoflegends/images/e/ef/Top_icon.png/revision/latest/window-crop/width/40/x-offset/0/y-offset/5/window-width/130/window-height/130?cb=20181117143602">
				<img src="https://vignette.wikia.nocookie.net/leagueoflegends/images/1/1b/Jungle_icon.png/revision/latest/window-crop/width/40/x-offset/0/y-offset/5/window-width/130/window-height/130?cb=20181117143559">
				<img src="https://vignette.wikia.nocookie.net/leagueoflegends/images/9/98/Middle_icon.png/revision/latest/window-crop/width/40/x-offset/0/y-offset/5/window-width/130/window-height/130?cb=20181117143644">
				<img src="https://vignette.wikia.nocookie.net/leagueoflegends/images/9/97/Bottom_icon.png/revision/latest/window-crop/width/40/x-offset/0/y-offset/5/window-width/130/window-height/130?cb=20181117143632">
				<img src="https://vignette.wikia.nocookie.net/leagueoflegends/images/e/e0/Support_icon.png/revision/latest/window-crop/width/40/x-offset/0/y-offset/5/window-width/130/window-height/130?cb=20181117143601">

				<article class="card">
					<div class="thumb"></div>
					<div class="infos">
						<h2 class="title">Namelez<span class="flag"></span></h2>
						<h3 class="date">Toplaner</h3>
						<h3 class="seats">seats remaining: 2</h3>
						<p class="txt">Join us for our Live Infinity Session in beautiful New York City. This is a 3 day intensive workshop where you'll learn how to become a better version of...</p>
						<h3 class="details">event details</h3>
					</div>
				</article>

			</div>
		</div>
		<div class="">
			<span>Roster Academy</span>
			<div>

			</div>
		</div>
	</div>
</div>


































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

</div>
</body> 
	<!-- Scripts -->
	<script src="{{ asset('js/app.js') }}" defer></script>
	<script src="{{ asset('js/index.js') }}" defer></script>
	<script src="{{ asset('js/font-awesome.js') }} " defer></script>
	<script src="{{ asset('js/jquery.nivo.slider.js') }}" defer></script>
</html>

