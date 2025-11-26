@extends('app')

@section('title', 'Praktische informatie')

@section('content')
<div class="blocked-page">
	
	<div class="row">
		<div class="block text">
			<h2>Toegang</h2>
			<p>Het Carbid Festival is voor jong en oud toegankelijk. We vragen geen entree. Natuurlijk is het wel zo dat er de nodige kosten worden gemaakt voor het festival. Een gift stellen we dan ook zeer op prijs.</p>
			<p>We zijn &#39;geopend&#39; op 31 december tussen 13.00 en 18.00 uur.</p>
		</div>
		<div class="block image cover">
			<img src="img/zone-eigen-risico.jpg" alt="Zone eigen risico" />
		</div>
	</div>
	
	<div class="row">
		<div class="block image cover">
			<img src="img/bar.jpg" alt="De bar is tussen 13:00 en 18:00 geopend!" />
		</div>
		<div class="block text">
			<h2>Eten en drinken</h2>
			<p>In de feesttent is er de mogelijkheid om een hapje en drankje te bestellen. Dit kan uiteraard niet voor niets. Een biertje kost bijvoorbeeld €2,50. We accepteren ook de gele Carbid Festival munten die eerdere edities zijn gekocht.</p>
		</div>
	</div>
	
	<div class="row">
		<div class="block text">
			<h2>Veiligheid</h2>
			<p>Veiligheid gaat boven alles. Om het Carbid Festival op een veilige manier te laten verlopen zijn de melkbussen in een stalen stellage geplaatst zodat ze geen kant op kunnen. Verder is deze stellage geplaatst op een veilige afstand van de feesttent. Betreden van het festivalterrein geschiedt op eigen risico. Het carbid schieten wordt alleen door de organisatie gedaan. Tip: neem gehoorbescherming mee!</p>
		</div>
		<div class="block image cover">
			<img src="img/veiligheid.jpg" alt="Gepaste afstand tot de bussen in soms wel handig" />
		</div>
	</div>
	
	<div class="row">
		<div class="block image cover">
			<img src="img/bijna-klaar-groepsfoto.jpg" alt="Bijna klaar voor de groepsfoto" />
		</div>
		<div class="block text">
			<h2>Organisatie</h2>
			<p>Het Carbid Festival wordt georganiseerd door twee vriendengroepen uit Gorssel. De leden zijn afkomstig uit Epse, Harfsen, Joppe en Gorssel.</p>
			<p>Iedereen werkt mee op vrijwillige basis om er een mooi feest van te maken.</p>
		</div>
	</div>
	
	<div class="row">
		<div class="block text">
			<h2>Bereikbaarheid</h2>
			<p>Het festivalterrein is gelegen de Hassinklaan net buiten Epse, parkeren kan op het parkeerterrein van de sporthal.<br />
				Geadviseerd wordt om met de fiets te komen, dan hoef je ook niet van en naar de parkeerplaats te lopen!</p>
		</div>
		<div class="block image cover">
			<img src="img/ingang.jpg" alt="Ingang over 25 meter" />
		</div>
	</div>
	
	<div class="row">
		<div class="block map">
			<div id="map" style="height: 295px;"></div>

			<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
			<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
			<script>
				var map = L.map('map').setView([52.218568, 6.199736], 16);

				L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
					attribution: '&copy; OpenStreetMap'
				}).addTo(map);

				// Gele marker (SVG)
				let yellowIcon = L.divIcon({
					className: "",
					html: `
						<svg width="32" height="32" viewBox="0 0 24 24">
							<defs>
								<filter id="shadow" x="-50%" y="-50%" width="200%" height="200%">
									<feDropShadow dx="0" dy="2" stdDeviation="3" flood-color="rgba(0,0,0,0.4)" />
								</filter>
							</defs>

							<g filter="url(#shadow)">
								<path fill="#FFFF00" d="M12 2C8.1 2 5 5.1 5 9c0 5.2 7 13 7 13s7-7.8 7-13c0-3.9-3.1-7-7-7z"/>
								<circle cx="12" cy="9" r="3" fill="#ccc"/>
							</g>
						</svg>
					`,
					iconSize: [32, 32],
					iconAnchor: [16, 32]
				});

				// Marker toevoegen
				L.marker([52.218568, 6.199736], { icon: yellowIcon }).addTo(map);
			</script>
		</div>
		<div class="block text">
			<h2>Locatie</h2>
			<p>Het Carbid Festival vind plaats aan de Hassinklaan nabij de Reelaan.</p>
			<p>Het advies is om met de fiets te komen, u kunt dan het dichtst bij parkeren, en u hoeft dan geen discussies te hebben over wie er terug rijdt!</p>
			<p><a href="https://www.google.nl/maps/dir//52.2187797,6.2005806/@52.2163082,6.1979306,16z/data=!4m2!4m1!3e2" target="_blank">Maak een routebeschrijving via Google Maps</a></p>
		</div>
	</div>
</div>
@endsection
