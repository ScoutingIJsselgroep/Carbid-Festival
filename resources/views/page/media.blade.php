@extends('app')

@section('title', 'Media')

@section('content')

	
<div class="album">
	<div class="description">
		<h2>2022</h2>
		<p>De wereld draait door!</p>
	</div>

	<?php
	$imgs = glob(public_path() . '/album/2022/full/*.jpeg');
	natsort($imgs);
	?>
	@foreach(array_values($imgs) as $key => $img)
	<a id="2022_{{$key}}" name="afbeelding_2022_{{$key}}" href="album/2022/full/{{basename($img)}}"><img src="album/2022/thumb/{{basename($img)}}" alt="" /></a>
	@endforeach
	<a id="2022_video_1" class="icon video" name="media_2022_video_1" href="https://www.youtube.com/embed/VfI0Lv15Ltk"><img src="https://img.youtube.com/vi/VfI0Lv15Ltk/default.jpg" alt="Vuurwerk" /></a>
	<a href="https://www.gld.nl/nieuws/7831450/kijk-hier-de-hoogtepunten-van-het-carbidschieten-terug" class="contain" target="blank" title="Bekijk ook het filmje van tv Gelderland"><img src="img/gld.png" alt="" /></a>
</div>

<div class="album">
	<div class="description">
		<h2>2019</h2>
		<p>Make buurt not war.</p>
	</div>
	<?php
	$imgs = glob(public_path() . '/album/2019/full/*.jpeg');
	natsort($imgs);
	?>
	@foreach(array_values($imgs) as $key => $img)
	<a id="2019_{{$key}}" name="afbeelding_2019_{{$key}}" href="album/2019/full/{{basename($img)}}"><img src="album/2019/thumb/{{basename($img)}}" alt="" /></a>
	@endforeach
</div>

<div class="album">
	<div class="description">
		<h2>2018</h2>
		<p>Liever een raket in de tuin dan een Rus in de keuken.</p>
	</div>
	<?php
	$imgs = glob(public_path() . '/album/2018/full/*.jpeg');
	natsort($imgs);
	?>
	@foreach(array_values($imgs) as $key => $img)
	<a id="2018_{{$key}}" name="afbeelding_2018_{{$key}}" href="album/2018/full/{{basename($img)}}"><img src="album/2018/thumb/{{basename($img)}}" alt="" /></a>
	@endforeach
</div>

<div class="album">
	<div class="description">
		<h2>2017</h2>
		<p>Carbid Festival 2017, Leven = dodelijk.</p>
	</div>
	<?php
	$imgs = glob(public_path() . '/album/2017/full/*.jpeg');
	natsort($imgs);
	?>
	@foreach(array_values($imgs) as $key => $img)
	<a id="2017_{{$key}}" name="afbeelding_2017_{{$key}}" href="album/2017/full/{{basename($img)}}"><img src="album/2017/thumb/{{basename($img)}}" alt="" /></a>
	@endforeach
</div>

<div class="album">
	<div class="description">
		<h2>2016</h2>
		<p>De stemming van twintig 16.</p>
	</div>
	<?php
	$imgs = glob(public_path() . '/album/2016/full/*.jpeg');
	natsort($imgs);
	?>
	@foreach(array_values($imgs) as $key => $img)
	<a id="2016_{{$key}}" name="afbeelding_2016_{{$key}}" href="album/2016/full/{{basename($img)}}"><img src="album/2016/thumb/{{basename($img)}}" alt="" /></a>
	@endforeach
</div>

<div class="album">
	<div class="description">
		<h2>2015</h2>
		<p>Carbid Festival 2015, ouderwets wordt weer nieuwerwets.</p>
	</div>
	<?php
	$imgs = glob(public_path() . '/album/2015/full/*.jpeg');
	natsort($imgs);
	?>
	@foreach(array_values($imgs) as $key => $img)
	<a id="2015_{{$key}}" name="afbeelding_2015_{{$key}}" href="album/2015/full/{{basename($img)}}"><img src="album/2015/thumb/{{basename($img)}}" alt="" /></a>
	@endforeach
	<a id="2015_video_1" class="icon video" name="media_2015_video_1" href="https://www.youtube.com/embed/a1S26j5rIT8"><img src="https://img.youtube.com/vi/a1S26j5rIT8/default.jpg" alt="Aftermovie" /></a>
</div>

<div class="album">
	<div class="description">
		<h2>2014</h2>
		<p>Een overzicht van Carbid Festival 2014, foto&#39;s, video&#39;s, foto&#39;s van de voorberieding en krantenknipsels.</p>
	</div>
	<?php
	$imgs = glob(public_path() . '/album/2014/full/*.jpeg');
	natsort($imgs);
	?>
	@foreach(array_values($imgs) as $key => $img)
	<a id="2014_{{$key}}" name="afbeelding_2014_{{$key}}" href="album/2014/full/{{basename($img)}}"><img src="album/2014/thumb/{{basename($img)}}" alt="" /></a>
	@endforeach
	<a id="2014_video_1" class="icon video" name="media_2014_video_1" href="https://www.youtube.com/embed/OMVaqSZ5ORg"><img src="https://img.youtube.com/vi/OMVaqSZ5ORg/default.jpg" alt="Verticaal schieten" /></a>
	<a id="2014_video_2" class="icon video" name="media_2014_video_2" href="https://www.youtube.com/embed/Xmg8Nf7Xtqs"><img src="https://img.youtube.com/vi/Xmg8Nf7Xtqs/default.jpg" alt="Aftermovie" /></a>
</div>

<div class="album">
	<div class="description">
		<h2>2013</h2>
		<p>Een kleine selectie foto's en kantenknipsels van Carbid Festival 2013.</p>
	</div>
	<?php
	$imgs = glob(public_path() . '/album/2013/full/*.jpeg');
	natsort($imgs);
	?>
	@foreach(array_values($imgs) as $key => $img)
	<a id="2013_{{$key}}" name="media_2013_{{$key}}" href="album/2013/full/{{basename($img)}}"><img src="album/2013/thumb/{{basename($img)}}" alt="" /></a>
	@endforeach
	<a id="2013_video_1" class="icon video" name="media_2013_video_1" href="https://www.youtube.com/embed/qBDqB_XW-dw"><img src="https://img.youtube.com/vi/qBDqB_XW-dw/default.jpg" alt="Schieten met carbid" /></a>
</div>

<div class="album">
	<div class="description">
		<h2>2012</h2>
		<p>Een aantal foto's van Carbid Festival 2012, gelukkig is het toch niet het einde der tijden geworden.</p>
	</div>
	<?php
	$imgs = glob(public_path() . '/album/2012/full/*.jpeg');
	natsort($imgs);
	?>
	@foreach(array_values($imgs) as $key => $img)
	<a id="2012_{{$key}}" name="media_2012_{{$key}}" href="album/2012/full/{{basename($img)}}"><img src="album/2012/thumb/{{basename($img)}}" alt="" /></a>
	@endforeach
</div>

<div class="album">
	<div class="description">
		<h2>2011</h2>
		<p>Ook van Carbid Festival 2011 hebben we nog wat foto's uit het archief kunnen halen.</p>
	</div>
	<?php
	$imgs = glob(public_path() . '/album/2011/full/*.jpeg');
	natsort($imgs);
	?>
	@foreach(array_values($imgs) as $key => $img)
	<a id="2011_{{$key}}" name="media_2011_{{$key}}" href="album/2011/full/{{basename($img)}}"><img src="album/2011/thumb/{{basename($img)}}" alt="" /></a>
	@endforeach
	<a id="2011_video_1" class="icon video" name="media_2011_video_1" href="https://www.youtube.com/embed/Zkf54Pfkg6U"><img src="https://img.youtube.com/vi/Zkf54Pfkg6U/default.jpg" alt="Impressie" /></a>
</div>

<div class="album">
	<div class="description">
		<h2>2010</h2>
		<p>En van de koudste editie, die van 2010 hebben we ook nog wat foto's.</p>
	</div>
	<?php
	$imgs = glob(public_path() . '/album/2010/full/*.jpeg');
	natsort($imgs);
	?>
	@foreach(array_values($imgs) as $key => $img)
	<a id="2010_{{$key}}" name="media_2010_{{$key}}" href="album/2010/full/{{basename($img)}}"><img src="album/2010/thumb/{{basename($img)}}" alt="" /></a>
	@endforeach
</div>

<div class="album">
	<div class="description">
		<h2>2006</h2>
		<p>In den beginne was er niets, even later, in 2006 was het eerste Carbid Festival.</p>
	</div>
	<?php
	$imgs = glob(public_path() . '/album/2006/full/*.jpeg');
	natsort($imgs);
	?>
	@foreach(array_values($imgs) as $key => $img)
	<a id="2006_{{$key}}" name="media_2006_{{$key}}" href="album/2006/full/{{basename($img)}}"><img src="album/2006/thumb/{{basename($img)}}" alt="" /></a>
	@endforeach
</div>
@endsection

@section('javascript')
var hashFromAction = false;
function addSlide(a) {
	prev = a.getPrevious('a');
	next = a.getNext('a');
	if(a.href.indexOf('https://www.youtube.com')==0) {
		new Element('div.slideshow.shadow', {
			html: '<iframe src="' + a.href + '" frameborder="0" allowfullscreen></iframe><div class="title">' + a.getElement('img').getAttribute('alt') + '</div><div class="prev icon"></div><div class="next icon"></div>'
		}).inject(document.body).addEvent('click', function(e) {
			this.dispose();
			var action = false;
			if(e.target.hasClass('prev') && prev) {
				prev.fireEvent('click');
				action = true;
			} else if(e.target.hasClass('next') && next) {
				next.fireEvent('click');
				action = true;
			}
			if(!action) {
				hashFromAction = true;
				window.location.hash = 'overzicht';
			}
		});
	} else {
		new Element('div.slideshow.shadow', {
			html: '<img src="' + a.href + '" /><div class="title">' + a.getElement('img').getAttribute('alt') + '</div><div class="prev icon"></div><div class="next icon"></div>'
		}).inject(document.body).addEvent('click', function(e) {
			this.dispose();
			var action = false;
			if(e.target.hasClass('prev') && prev) {
				prev.fireEvent('click');
				action = true;
			} else if(e.target.hasClass('next') && next) {
				next.fireEvent('click');
				action = true;
			}
			if(!action) {
				hashFromAction = true;
				window.location.hash = 'overzicht';
			}
		});
	}
	
	if(next) {
		var image = new Image(),
			element = document.id(image) || new Element('img');
		image.src = element.src = next.href;
	}
	if(prev) {
		var image = new Image(),
			element = document.id(image) || new Element('img');
		image.src = element.src = prev.href;
	}
}
document.getElements('.album a').each(function(a) {
	a.addEvent('click', function(e) {
		if(this.target != 'blank') {
			if(e) e.preventDefault();
			if(window.location.hash != 'media_' + a.id) {
				hashFromAction = true;
				window.location.hash = 'media_' + a.id;
			}
			addSlide(a);
		}
	});
});
window.addEvent('hashchange', function(e) {
	if(hashFromAction) {
		hashFromAction = false;
	} else {
		var slideshow = document.getElement('div.slideshow.shadow');
		if(slideshow) {
			slideshow.dispose();
		}
		if(window.location.hash != '' && window.location.hash != '#') {
			var el = document.getElement('a#' + window.location.hash.slice(12));
			if(el) {
				addSlide(el);
			}
		}
	}
});
if(window.location.hash != '') {
	var el = document.getElement('a#' + window.location.hash.slice(12));
	if(el) {
		el.fireEvent('click');
	}
}
@endsection
