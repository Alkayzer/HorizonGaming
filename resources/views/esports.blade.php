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
            <span class="lol1">Roster</span><span class="lol2">Oficial</span>
            </div>
        </div>
        <div class="col-md-6 right">
            <div class="centering2">
            <span class="lol1">Roster</span><span class="lol2">Academy</span>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid">
		<div class="roster-oficial-div">
			<span class="roster-oficial-span">Roster Oficial</span>
		
			<div id="cards-roster-oficial" class="container-fluid">
				<!--<img src="https://vignette.wikia.nocookie.net/leagueoflegends/images/e/ef/Top_icon.png/revision/latest/window-crop/width/40/x-offset/0/y-offset/5/window-width/130/window-height/130?cb=20181117143602">
				<img src="https://vignette.wikia.nocookie.net/leagueoflegends/images/1/1b/Jungle_icon.png/revision/latest/window-crop/width/40/x-offset/0/y-offset/5/window-width/130/window-height/130?cb=20181117143559">
				<img src="https://vignette.wikia.nocookie.net/leagueoflegends/images/9/98/Middle_icon.png/revision/latest/window-crop/width/40/x-offset/0/y-offset/5/window-width/130/window-height/130?cb=20181117143644">
				<img src="https://vignette.wikia.nocookie.net/leagueoflegends/images/9/97/Bottom_icon.png/revision/latest/window-crop/width/40/x-offset/0/y-offset/5/window-width/130/window-height/130?cb=20181117143632">
				<img src="https://vignette.wikia.nocookie.net/leagueoflegends/images/e/e0/Support_icon.png/revision/latest/window-crop/width/40/x-offset/0/y-offset/5/window-width/130/window-height/130?cb=20181117143601">
				-->
				<div class="card">
				<article class="card card--2">
				<div class="card__info-hover">
					<svg class="card__like"  viewBox="0 0 24 24">
					<path fill="#000000" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
				</svg>
					<div class="card__clock-info">
						<svg class="card__clock"  viewBox="0 0 24 24"><path d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
						</svg><span class="card__time">5 min</span>
					</div>
				</div>
				<div class="card__img"></div>
					<a href="#" class="card_link">
						<div class="card__img--hover"></div>
					</a>
					<div class="card__info">
						<span class="card__category"> Travel</span>
						<h3 class="card__title">Discover the sea</h3>
						<span class="card__by">by <a href="#" class="card__author" title="author">John Doe</a></span>
					</div>
				</article>
					<div class="thumb"></div>
					<div class="infos">
						<h2 class="title">Namelez<span class="flag"></span></h2>
						<h3 class="date">Toplaner</h3>
						<h3 class="seats">seats remaining: 2</h3>
						<p class="txt">Join us for our Live Infinity Session in beautiful New York City. This is a 3 day intensive workshop where you'll learn how to become a better version of...</p>
						<h3 class="details">event details</h3>
					</div>
				</div>

				<div class="card">
					<div class="thumb"></div>
					<div class="infos">
						<h2 class="title">Namelez<span class="flag"></span></h2>
						<h3 class="date">Toplaner</h3>
						<h3 class="seats">seats remaining: 2</h3>
						<p class="txt">Join us for our Live Infinity Session in beautiful New York City. This is a 3 day intensive workshop where you'll learn how to become a better version of...</p>
						<h3 class="details">event details</h3>
					</div>
				</div>

				<div class="card">
					<div class="thumb"></div>
					<div class="infos">
						<h2 class="title">Namelez<span class="flag"></span></h2>
						<h3 class="date">Toplaner</h3>
						<h3 class="seats">seats remaining: 2</h3>
						<p class="txt">Join us for our Live Infinity Session in beautiful New York City. This is a 3 day intensive workshop where you'll learn how to become a better version of...</p>
						<h3 class="details">event details</h3>
					</div>
				</div>

				<div class="card">
					<div class="thumb"></div>
					<div class="infos">
						<h2 class="title">Namelez<span class="flag"></span></h2>
						<h3 class="date">Toplaner</h3>
						<h3 class="seats">seats remaining: 2</h3>
						<p class="txt">Join us for our Live Infinity Session in beautiful New York City. This is a 3 day intensive workshop where you'll learn how to become a better version of...</p>
						<h3 class="details">event details</h3>
					</div>
				</div>

				<div class="card">
					<div class="thumb"></div>
					<div class="infos">
						<h2 class="title">Namelez<span class="flag"></span></h2>
						<h3 class="date">Toplaner</h3>
						<h3 class="seats">seats remaining: 2</h3>
						<p class="txt">Join us for our Live Infinity Session in beautiful New York City. This is a 3 day intensive workshop where you'll learn how to become a better version of...</p>
						<h3 class="details">event details</h3>
					</div>
				</div>
			</div>
			
		</div>
		<div class="roster-academy-div">
			<span>Roster Academy</span>
			<div>

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

