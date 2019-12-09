<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1">
	<title>@yield('title') | Carbid Festival Epse</title>
	
	<link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="/favicon/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="/favicon/android-chrome-192x192.png" sizes="192x192">
	<link rel="icon" type="image/png" href="/favicon/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="/favicon/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="/favicon/manifest.json">
	<link rel="mask-icon" href="/favicon/safari-pinned-tab.svg" color="#ffff00">
	<link rel="shortcut icon" href="/favicon/favicon.ico">
	<meta name="msapplication-TileColor" content="#ffc40d">
	<meta name="msapplication-TileImage" content="/favicon/mstile-144x144.png">
	<meta name="msapplication-config" content="/favicon/browserconfig.xml">
	<meta name="theme-color" content="#ffff00">
	
    <meta property="og:image" content="{{ url('img/logo_og.jpg') }}">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="500">
    <meta property="og:image:height" content="500">
    
	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>
<body>
	<script>(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');ga('create', 'UA-69842243-1', 'auto');ga('send', 'pageview');</script>
	<div class="header">
		<h1>Carbid Festival 2019</h1>
	</div>
	<img class="loader" src="img/loader.gif" alt="" />
	<nav class="navbar">
		<div class="navbar-container">
			<div id="navbar-button">
				<div>Toggle</div>
			</div>
			<div class="navbar-toggle">
				<ul class="navbar-main">
					<li><a class="icon icon-home" href="{{ url('/') }}">Home</a></li>
					<li><a href="{{ url('/geschiedenis') }}">Geschiedenis</a></li>
					<li><a href="{{ url('/programma') }}">Programma</a></li>
					<li><a href="{{ url('/de-tien') }}">De Tien</a></li>
					<li><a href="{{ url('/sponsoren') }}">Sponsoren</a></li>
					<li><a href="{{ url('/media') }}">Media</a></li>
					<li><a href="{{ url('/info') }}">Info</a></li>
				</ul>
				<!--<ul class="navbar-right">
					@if (Auth::guest())
						<li><a href="{{ url('/auth/login') }}" class="icon icon-key">Login</a></li>
					@else
						<li><a href="{{ url('/auth/user') }}">{{ Auth::user()->name }}</a></li>
						<li><a href="{{ url('/auth/logout') }}" class="icon icon-lock">Logout</a></li>
					@endif
				</ul>-->
			</div>
		</div>
	</nav>
@yield('content')
	<div class="footer">
		<a href="https://www.facebook.com/carbidfestival" target="_blank" class="facebook icon"><span class="small">facebook</span>.com/carbidfestival</a>
		<a href="https://www.youtube.com/carbidfestival" target="_blank" class="youtube icon"><span class="small">youtube</span>.com/carbidfestival</a>
		<a href="mailto:carbidfestival@gmail.com" class="mail icon">carbidfestival@g<span class="small">mail</span>.com</a>
		<div class="clear"></div>
	</div>
	<script src="{{ asset('/js/MooTools-Core-1.5.2-compressed.js') }}" type="text/javascript"></script>
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<script type="text/javascript">
@yield('javascript')
document.id("navbar-button").addEvent("click",function(){this.getParent("nav").toggleClass("active")}),document.getElements(".image img").each(function(t){var e=t.getParent(".image"),i=t.getAttribute("src"),n=t.getAttribute("alt");e.setStyle("background-image","url("+i+")").setAttribute("title",n),new Element("div.img",{styles:{"background-image":"url("+i+")"}}).inject(t,"after"),t.dispose(),e.addEvent("click",function(){new Element("div.slideshow"+(".png"==i.slice(-4)?"":".shadow"),{html:'<img src="'+i+'" /><div class="title">'+n+"</div>"}).inject(document.body).addEvent("click",function(){this.dispose()})})});
	</script>
</body>
</html>
