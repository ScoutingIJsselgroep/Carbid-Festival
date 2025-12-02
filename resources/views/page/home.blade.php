@extends('app')

@section('title', 'Home')

@section('content')
<div class="blocked-page">
	<div class="row">
		<div class="block text">
			<h2>Boeren, burgers &amp; buitenlui!</h2>
			<p>Welkom bij de website van het leukste Carbid Festival van de hele Hassinklaan in het Noord-West Achterhoeks dorpje Epse.</p>
			<p>Op deze website voorzien we u van wat nuttige informatie over ons evenement, handig als u langs wilt komen, of ons misschien wilt bijdragen aan dit feest!<br />
				Daarnaast voorzien we u natuurlijk ook van een gezonde dosis onzin om alvast een beetje in de stemming te komen.</p>
		</div>
		<div class="block image contain logo" title="Klik en schiet!">
			<div id="holder"></div>
		</div>
	</div>
	
	<div class="row">
		<div class="block image contain">
			<img src="img/geschoten-500.png" alt="Niet geschoten is altijd mis!" />
		</div>
		<div class="block text">
			<h2>Niet geschoten is altijd mis!</h2>
			<p>Elk jaar hebben we een thema om het Carbid Festival een beetje aan te kleden.</p>
			<p>Dit jaar na lang beraad: "Niet geschoten is altijd mis!"<br />
				Wederom geïnspireerd door onze vriend Vladimir Poetin, zijn collega Benjamin Netanyahu, en een handje vol enthousiaste Ajax "supporters".<br />
				Maar de belangrijkste reden voor het thema van dit jaar is dat deze jaarwisseling is het laatste jaar dat we tussen 18.00 en 02.00 vuurwerk af mogen steken.</p>
			<p>Bekijk de eerdere thema&#39;s <a href="geschiedenis">terugkijken</a>.</p>
		</div>
	</div>
	
	<div class="row">
		<div class="block text">
			<h2>Vrijwilligers gezocht</h2>
			<p>Al heel wat jaren wordt het Carbid Festival opgezet door ongeveer het zelfde groepje vrijwilligers.<br />
				Gelukkig kunnen we tijdens de opbouw en de dag zelf meestal rekenen op extra hulp!</p>
			<p>Maar om ook na 2025 de organisatie soepel te kunnen laten verlopen zijn we op zoek naar enthousiaste vrijwilligers die zich willen inzetten voor verschillende taken<br />
				Dat kan zijn van het regelen van de vergunning aanvraag, het beheren van het geld, onderhouden van de melkbussen tot het verzinnen van een leuk thema en aankleding of de promotie van het Carbid Festival.</p>
			<p>Lijkt het je leuk om mee te helpen met een van deze taken, of heb je zelf een leuk idee, <a href="mailto:carbidfestival@gmail.com">mail ons dan!</a></p>
		</div>
		<div class="block image contain">
			<img src="img/Op-kantoor-versus-thuiswerken.jpg" alt="Thuis werken" />
		</div>
	</div>
	
	
	<div class="row">
		<div class="block image cover">
			<img src="img/melkbussen-knal.jpg" alt="Wat te veel water op het carbid geeft een grote vlam" />
		</div>
		<div class="block text">
			<h2>Carbid Festival</h2>
			<p>Voor de gene die nog niet (zo vaak) bij ons langs geweest zijn even een korte uitleg:</p>
			<ul>
				<li>Carbid is een anorganische verbinding van calcium en koolstof, die bij aanraking met water een explosief gas vormt.</li>
				<li>Festival is een veelal jaarlijks terugkerend evenement van ge&Iuml;nteresseerden over een bepaald onderwerp.</li>
			</ul>
			<p>Omdat deze combinatie precies bij ons aansluit hebben we deze een jaar of wat geleden gekozen als vervanging van enkel 'carbid schieten' als naam voor ons evenement.</p>
			<p>De 'naam' carbid schieten bevat in plaats van festival het woord schieten, een werkwoord, dit suggereert wellicht ten onrechte dat het ons doel is hard te werken.<br />
				Ons doel is toch vooral een gezelig feest voor jong en oud, met een drankje en eventueel een hapje om het jaar samen af te sluiten.</p>
		</div>
	</div>
</div>
<script type="application/ld+json">{"@context":"http://schema.org","@type":"Organization","url": "http://carbidfestival.nl/","logo":"http://carbidfestival.nl/img/logo.png","sameAs":["https://www.facebook.com/carbidfestival","https://www.youtube.com/carbidfestival"]}</script>
@endsection

@section('javascript')
function loadAnnimation(e,t){t||(t={});var c=new Element("script",{src:e,type:"text/javascript"}),n=t.document||document,l=t.onload||t.onLoad;return delete t.onload,delete t.onLoad,delete t.document,l&&(c.addEventListener?c.addEvent("load",l):c.addEvent("readystatechange",function(){["loaded","complete"].contains(this.readyState)&&l.call(this)})),c.set(t).inject(n.head)}function animate(){var e=pad.getTotalLength(),t=pad.getPointAtLength(counter);return counter>=e?(clearInterval(animation),animation=!1,deksel.attr({transform:"t"+[t.x,t.y]}),void(counter=0)):(deksel.attr({transform:"t"+[t.x,t.y]+"r"+(t.alpha+210)}),void(counter+=2))}var animation=!1,counter=0,scherven=[],deksel,melkbus,driehoek,pad,schervenpath=[["M45.247,93.807 49.558,92.069 50.304,93.171z","M74.499,87.233 109.864,76.822 114.446,84.76z"],["M50.92,93.412 47.9,93.622 51.216,94.35z","M118.202,92.599 78.234,95.372 125.03,103.091z"],["M51.556,94.124 50.304,93.171 52.128,95.528z","M112.452,114.972 74.429,99.782 96.129,116.699z"],["M47.425,86.55 25.933,104.505 25.934,104.504 51.925,94.8z","M97.947,56.031 25.933,104.505 25.934,104.504 103.864,66.43z"],["M45.963,92.069 48.302,89.846 47.9,89.062z","M65.252,71.069 91.967,45.675 87.402,37.767z"],["M48.302,88.602 45.963,91.278 47.551,87.488z","M82.507,30.623 60.088,63.793 76.858,19.506z"],["M47.797,87.233 48.302,91.278 46.8,85.925z","M60.288,24.471 54.371,64.89 50.619,37.723z"]];!function(){var e;window.addEvent("resize",function(){window.clearTimeout(e),e=window.setTimeout(function(){window.fireEvent("resizeOnce")},50)})}();var holder=document.id("holder");holder.innerHTML="";var R;loadAnnimation("/js/raphael.js",{onLoad:function(){R=Raphael("holder",140,125),R.setViewBox(0,0,140,125);var e=holder.getParent(".logo"),t=e.getSize();(t.x-50)/140>(t.y-30)/125?(holder.getElement("svg").setAttribute("width",Math.floor(140*((t.y-30)/125))),holder.getElement("svg").setAttribute("height",Math.floor(t.y-30))):(holder.getElement("svg").setAttribute("width",Math.floor(t.x-50)),holder.getElement("svg").setAttribute("height",Math.floor(125*((t.x-50)/140)))),window.addEvent("resize",function(){holder.dispose()}),window.addEvent("resizeOnce",function(){holder.dispose();var t=e.getSize();(t.x-50)/140>(t.y-30)/125?(holder.getElement("svg").setAttribute("width",Math.floor(140*((t.y-30)/125))),holder.getElement("svg").setAttribute("height",Math.floor(t.y-30))):(holder.getElement("svg").setAttribute("width",Math.floor(t.x-50)),holder.getElement("svg").setAttribute("height",Math.floor(125*((t.x-50)/140)))),holder.inject(e)}),driehoek=R.path("M60.304,6.289L2.418,106.542c-2.026,3.509-2.026,7.83-0.001,11.338c2.026,3.509,5.77,5.67,9.82,5.67 l115.766-0.007c4.053,0,7.793-2.161,9.82-5.67c2.025-3.508,2.023-7.83-0.002-11.338L79.943,6.287 c-2.025-3.508-5.768-5.668-9.818-5.668C66.073,0.619,62.331,2.78,60.304,6.289z M128.003,112.204L12.236,112.21L70.124,11.957 L128.003,112.204z").attr({fill:"#231F20","stroke-width":0}),melkbus=R.path("M37.791,83.098c-1.618,1.679-1.704,2.335-1.611,2.642L18.638,95.814l-7.955,17.488l19.554,1.603L47,105.226 c0.366,0.154,1.135,0.206,2.865-0.215c0.146-0.057,1.466-0.677,2.037-1.783c0.299-0.58,0.33-1.083,0.09-1.499 c-0.216-0.374-0.59-0.566-0.923-0.718c-0.42-0.191-0.922-0.184-1.58,0.041l0.315-2.256l4.114-2.375l-6.982-12.093l-4.113,2.375 l-2.35-0.946c0.877-0.614,1.3-1.156,1.361-1.741c0.038-0.36,0.061-0.774-0.152-1.144c-0.236-0.408-0.684-0.628-1.333-0.653 C39.111,82.169,37.913,83,37.791,83.098z M50.667,101.932c0.126,0.059,0.39,0.178,0.458,0.297c0.051,0.089,0.009,0.279-0.116,0.521 c-0.41,0.795-1.473,1.303-1.483,1.308c-0.247,0.058-0.506,0.106-0.759,0.148l0.306-0.177l0.253-1.813 C50.107,101.858,50.489,101.851,50.667,101.932z M40.31,83.218c0.271,0.01,0.456,0.067,0.506,0.154 c0.068,0.118,0.039,0.402,0.024,0.539c-0.025,0.239-0.315,0.673-1.5,1.389l-1.408-0.566l-0.434,0.25 c0.247-0.342,0.597-0.765,0.94-1.129C38.448,83.847,39.42,83.182,40.31,83.218z").attr({fill:"#231F20","stroke-width":0}),deksel=R.path("M46.968,84.179 43.071,86.429 49.988,98.561 53.885,96.311 54.622,97.087 55.38,96.649 47.423,82.718 46.665,83.155z").attr({fill:"#231F20","stroke-width":0}),pad=R.path("M0,0.05c13.655-8.923,39.105-26.095,48.757-28.086C29.991-17.611,5.592-41.581,0-43.846 C11.908-33.695,51.325,4.889,50.575,22.085C48.741-6.695,28.115-17.944,10.286-6.693").attr({fill:"none","stroke-width":0});for(i in schervenpath)scherven[i]=R.path(schervenpath[i][0]).attr({fill:"#231F20","stroke-width":0});e.addEventListener("click",function(){animation||deksel.stop().animate({transform:""},200,">",function(){for(i in schervenpath)scherven[i].stop().attr({path:schervenpath[i][0]});melkbus.stop().animate({path:"M37.791,83.098c-1.618,1.679-1.547,2.152-1.547,2.152s-14.088,2.83-17.606,10.564l-7.955,17.488 l19.554,1.603c10.375-1.417,17.672-8.591,17.898-9.473c0,0,0,0,1.729-0.421c0.146-0.057,1.466-0.677,2.037-1.783 c0.299-0.58,0.33-1.083,0.09-1.499c-0.216-0.374-0.59-0.566-0.923-0.718c-0.42-0.191-0.922-0.184-1.58,0.041l0.315-2.256 c3.496,0.629,4.114-2.375,4.114-2.375l-6.982-12.093c0,0-3.278,0.028-4.113,2.375l-2.35-0.946c0.877-0.614,1.3-1.156,1.361-1.741 c0.038-0.36,0.061-0.774-0.152-1.144c-0.236-0.408-0.684-0.628-1.333-0.653C39.111,82.169,37.913,83,37.791,83.098z M50.667,101.932c0.126,0.059,0.39,0.178,0.458,0.297c0.051,0.089,0.009,0.279-0.116,0.521c-0.41,0.795-1.473,1.303-1.483,1.308 c-0.247,0.058-0.506,0.106-0.759,0.148l0.306-0.177l0.253-1.813C50.107,101.858,50.489,101.851,50.667,101.932z M40.31,83.218 c0.271,0.01,0.456,0.067,0.506,0.154c0.068,0.118,0.039,0.402,0.024,0.539c-0.025,0.239-0.315,0.673-1.5,1.389l-1.408-0.566 l-0.434,0.25c0.247-0.342,0.597-0.765,0.94-1.129C38.448,83.847,39.42,83.182,40.31,83.218z"},1e3,">",function(){melkbus.stop().animate({path:"M37.791,83.098c-1.618,1.679-1.704,2.335-1.611,2.642L18.638,95.814l-7.955,17.488l19.554,1.603L47,105.226 c0.366,0.154,1.135,0.206,2.865-0.215c0.146-0.057,1.466-0.677,2.037-1.783c0.299-0.58,0.33-1.083,0.09-1.499 c-0.216-0.374-0.59-0.566-0.923-0.718c-0.42-0.191-0.922-0.184-1.58,0.041l0.315-2.256l4.114-2.375l-6.982-12.093l-4.113,2.375 l-2.35-0.946c0.877-0.614,1.3-1.156,1.361-1.741c0.038-0.36,0.061-0.774-0.152-1.144c-0.236-0.408-0.684-0.628-1.333-0.653 C39.111,82.169,37.913,83,37.791,83.098z M50.667,101.932c0.126,0.059,0.39,0.178,0.458,0.297c0.051,0.089,0.009,0.279-0.116,0.521 c-0.41,0.795-1.473,1.303-1.483,1.308c-0.247,0.058-0.506,0.106-0.759,0.148l0.306-0.177l0.253-1.813 C50.107,101.858,50.489,101.851,50.667,101.932z M40.31,83.218c0.271,0.01,0.456,0.067,0.506,0.154 c0.068,0.118,0.039,0.402,0.024,0.539c-0.025,0.239-0.315,0.673-1.5,1.389l-1.408-0.566l-0.434,0.25 c0.247-0.342,0.597-0.765,0.94-1.129C38.448,83.847,39.42,83.182,40.31,83.218z"},1e3,">");for(i in schervenpath)scherven[i].stop().animate({path:schervenpath[i][1]},1e3);animation=window.setInterval("animate()",10)})})}),melkbus.stop().animate({path:"M37.791,83.098c-1.618,1.679-1.547,2.152-1.547,2.152s-14.088,2.83-17.606,10.564l-7.955,17.488 l19.554,1.603c10.375-1.417,17.672-8.591,17.898-9.473c0,0,0,0,1.729-0.421c0.146-0.057,1.466-0.677,2.037-1.783 c0.299-0.58,0.33-1.083,0.09-1.499c-0.216-0.374-0.59-0.566-0.923-0.718c-0.42-0.191-0.922-0.184-1.58,0.041l0.315-2.256 c3.496,0.629,4.114-2.375,4.114-2.375l-6.982-12.093c0,0-3.278,0.028-4.113,2.375l-2.35-0.946c0.877-0.614,1.3-1.156,1.361-1.741 c0.038-0.36,0.061-0.774-0.152-1.144c-0.236-0.408-0.684-0.628-1.333-0.653C39.111,82.169,37.913,83,37.791,83.098z M50.667,101.932c0.126,0.059,0.39,0.178,0.458,0.297c0.051,0.089,0.009,0.279-0.116,0.521c-0.41,0.795-1.473,1.303-1.483,1.308 c-0.247,0.058-0.506,0.106-0.759,0.148l0.306-0.177l0.253-1.813C50.107,101.858,50.489,101.851,50.667,101.932z M40.31,83.218 c0.271,0.01,0.456,0.067,0.506,0.154c0.068,0.118,0.039,0.402,0.024,0.539c-0.025,0.239-0.315,0.673-1.5,1.389l-1.408-0.566 l-0.434,0.25c0.247-0.342,0.597-0.765,0.94-1.129C38.448,83.847,39.42,83.182,40.31,83.218z"},1e3,">",function(){melkbus.animate({path:"M37.791,83.098c-1.618,1.679-1.704,2.335-1.611,2.642L18.638,95.814l-7.955,17.488l19.554,1.603L47,105.226 c0.366,0.154,1.135,0.206,2.865-0.215c0.146-0.057,1.466-0.677,2.037-1.783c0.299-0.58,0.33-1.083,0.09-1.499 c-0.216-0.374-0.59-0.566-0.923-0.718c-0.42-0.191-0.922-0.184-1.58,0.041l0.315-2.256l4.114-2.375l-6.982-12.093l-4.113,2.375 l-2.35-0.946c0.877-0.614,1.3-1.156,1.361-1.741c0.038-0.36,0.061-0.774-0.152-1.144c-0.236-0.408-0.684-0.628-1.333-0.653 C39.111,82.169,37.913,83,37.791,83.098z M50.667,101.932c0.126,0.059,0.39,0.178,0.458,0.297c0.051,0.089,0.009,0.279-0.116,0.521 c-0.41,0.795-1.473,1.303-1.483,1.308c-0.247,0.058-0.506,0.106-0.759,0.148l0.306-0.177l0.253-1.813 C50.107,101.858,50.489,101.851,50.667,101.932z M40.31,83.218c0.271,0.01,0.456,0.067,0.506,0.154 c0.068,0.118,0.039,0.402,0.024,0.539c-0.025,0.239-0.315,0.673-1.5,1.389l-1.408-0.566l-0.434,0.25 c0.247-0.342,0.597-0.765,0.94-1.129C38.448,83.847,39.42,83.182,40.31,83.218z"},1e3,">");for(i in schervenpath)scherven[i].animate({path:schervenpath[i][1]},1e3);animation=window.setInterval("animate()",15)})}});
@endsection