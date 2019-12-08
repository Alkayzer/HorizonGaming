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


<!--carousel-->

<div class="contenedor-slider">
	<div class="slider__warpper">
	<div class="flex__container flex--pikachu flex--active" data-slide="1">
		<div class="flex__item flex__item--left">
		<div class="flex__content">
			<p class="text--sub">#GoHZG</p>
			<h1 class="text--big">Horizon Gaming</h1>
			<p class="text--normal">Horizon Gaming tiene como objetivo formar un equipo de E-Sports para participar en torneos amateurs y semiprofesionales, con la finalidad de consolidar un roster de nivel competitivo para llegar a la escena profesional nacional e internacional.</p>
		</div>
		<p class="text__background">HZG</p>
		</div>
		<div class="flex__item flex__item--right"></div>
		<img class="pokemon__img" src="{{asset('img/oso.png')}}" />
	</div>
	<div class="flex__container flex--piplup animate--start" data-slide="2">
		<div class="flex__item flex__item--left">
		<div class="flex__content">
			<p class="text--sub">Pokemon Gen IV</p>
			<h1 class="text--big">Piplup</h1>
			<p class="text--normal">Piplup is the Water-type Starter Pokémon of the Sinnoh region. It was introduced in Generation IV. Piplup has a strong sense of self-esteem. It seldom accepts food that people give because of its pride.</p>
		</div>
		<p class="text__background">Piplup</p>
		</div>
		<div class="flex__item flex__item--right"></div>
		<img class="pokemon__img" src="https://s4.postimg.org/sa9dl4825/pilup.png" />
	</div>
	<div class="flex__container flex--blaziken animate--start" data-slide="3">
		<div class="flex__item flex__item--left">
		<div class="flex__content">
			<p class="text--sub">Pokemon Gen III</p>
			<h1 class="text--big">Blaziken</h1>
			<p class="text--normal">Blaziken is the Fire/Fighting-type Starter Pokémon of the Hoenn region, introduced in Generation III. Blaziken is a large, bipedal, humanoid bird-like Pokémon that resembles a rooster.</p>
		</div>
		<p class="text__background">Blaziken</p>
		</div>
		<div class="flex__item flex__item--right"></div>
		<img class="pokemon__img" src="https://s4.postimg.org/6795hnlql/blaziken.png" />
	</div>
	<div class="flex__container flex--dialga animate--start" data-slide="4">
		<div class="flex__item flex__item--left">
		<div class="flex__content">
			<p class="text--sub">Pokemon Gen IV</p>
			<h1 class="text--big">Dialga</h1>
			<p class="text--normal">Dialga is a Steel/Dragon-type Legendary Pokémon. Dialga is a sauropod-like Pokémon. It is mainly blue with some gray, metallic portions, such as its chest plate, which has a diamond in the center. It also has various, light blue lines all over
			its body.</p>
		</div>
		<p class="text__background">Dialga</p>
		</div>
		<div class="flex__item flex__item--right"></div>
		<img class="pokemon__img" src="https://s4.postimg.org/43yq9zlxp/dialga.png" />
	</div>
	<div class="flex__container flex--zekrom animate--start" data-slide="5">
		<div class="flex__item flex__item--left">
		<div class="flex__content">
			<p class="text--sub">Pokemon Gen V</p>
			<h1 class="text--big">Zekrom</h1>
			<p class="text--normal">Zekrom is a Dragon/Electric-type Legendary Pokémon. It is part of the Tao Trio, along with Reshiram and Kyurem. Zekrom is a large, black draconian Pokémon that seems to share its theme with its counterpart, Reshiram. It has piercing red eyes and
			dark gray to black skin that seems to be armor-like.</p>
		</div>
		<p class="text__background">Zekrom</p>
		</div>
		<div class="flex__item flex__item--right"></div>
		<img class="pokemon__img" src="https://s4.postimg.org/malmhgn9p/zekrom.png" />
	</div>
	</div>

	<div class="slider__navi">
	<a href="#" class="slide-nav active" id="1" data-slide="1">1</a>
	<a href="#" class="slide-nav" id="2" data-slide="2">2</a>
	<a href="#" class="slide-nav" id="3" data-slide="3">3</a>
	<a href="#" class="slide-nav" id="4" data-slide="4">4</a>
	<a href="#" class="slide-nav" id="5" data-slide="5">5</a>
	</div>
</div>

<!--fin carousel-->


<div class="social-media">
	<div>
		<span class="instagram-hzg active">SIGUENOS EN </span><a class="instagram-hzg" href="https://www.instagram.com/horizongamingofficial/" target="_blank"><i class="fa fa-instagram"></i><span class="instagram-hzg color"> INSTAGRAM</spam></a>

	</div>
</div>

<div class="sponsors">
<div>
	<img class="sponsor hyperx" src="{{asset('img/sponsors/hyperx.png')}}">
	<img class="sponsor corsair" src="{{asset('img/sponsors/corsair.png')}}">
	<img class="sponsor reddragon" src="{{asset('img/sponsors/reddragon.png')}}">
	<img class="sponsor imc" src="{{asset('img/sponsors/imcactive.png')}}">
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

