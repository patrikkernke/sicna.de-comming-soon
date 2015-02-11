@extends('app')

@section('content')
	
	<div class="head-line"></div>

	<div class="container">

		<div class="row">
			
			<div class="col-md-12 text-center">
				
				<div class="logo-splash animated bounceInDown">
					<img src="/gfx/logo-mood-1.jpg">
				</div>

				<h1 class="animated zoomIn">Attraktive Folienlösungen für Schutz und Gestaltung von Oberflächen.</h1>
				
				<h2>Demnächst</h2>
				
				<ul class="products">
					<li>Carwrapping</li>	
					<li>Werbebeschriftung</li>
					<li>Lackschutz</li>
					<li>Sonnenschutz</li>
					<li>Sichtschutz</li>
					<li>Digitaldruck</li>
				</ul>

				<a href="#" id="contactOpenBtn" class="btn btn-default animated">Kontakt aufnehmen</a>
				
			</div>		

		</div>

	</div>

	<footer>
		<div class="bgr-image">
			<img src="/gfx/cs-red-texture.jpg">	
			<div class="red-filter"></div>
		</div>

		<div class="container">
			
			<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-3">
				<div class="logo text-center text-uppercase">
					<img class="animated fadeIn" src="/gfx/sicna-logo_240.png">
				</div>
			</div>

			<div class="col-md-4 col-sm-3 col-xs-3 text-right footer-menue">
				<a href="#">Impressum</a>
			</div>

		</div>
	</footer>

	<div id="overlayContact" class="overlay-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="logo-splash">
						<img src="/gfx/logo-mood-neutral.png">
					</div>

					<h1>Beratung, Entwurf und Montage.</h1>
					<h2>Wir helfen Ihnen gerne weiter!</h2>
				</div>
			</div>
			<div class="contact-data row">
				
				<div class="col-md-4 col-sm-4 col-xs-12 text-center">
					<span class="glyphicon glyphicon-envelope"></span>
					<a href="mailto:info@sicna.de?subject=Anfrage&body=Guten%20Tag,%0A%0AGerne%20helfen%20wir%20Ihnen%20weiter.%0A%0AWir%20freuen%20uns%20über%20Ihre%20Fragen!" class="contact bigger">
						info@sicna.de
					</a>
				</div>
				
				<div class="col-md-4 col-sm-4 col-xs-12 text-center">
					<span class="glyphicon glyphicon-phone"></span>
					<a href="tel:026184088" class="contact bigger">
						0261 / 84088
					</a>
				</div>
				
				<div class="col-md-4 col-sm-4 col-xs-12 text-center">		
					<span class="glyphicon glyphicon-flag"></span>
					<a href="https://www.google.de/maps/place/Rudolf-Diesel-Stra%C3%9Fe+8,+56220+Urmitz/@50.39994,7.51679,17z/data=!3m1!4b1!4m2!3m1!1s0x47be624bd32c320f:0xac077ed4cd58e747" class="contact">
						Rudolf-Diesel-Str. 8, <br> 56220 Urmitz bei Koblenz
					</a>
				</div>

			</div>
			<div class="row">
				<div class="col-md-4 col-md-offset-4 col-xs-6 col-xs-offset-3 text-center">
					<a id="contactHideBtn" href="#" class="btn btn-default">
						<span class="glyphicon glyphicon-chevron-up"></span>
						Zurück
					</a>
				</div>
			</div>
		</div>
	</div>
@stop