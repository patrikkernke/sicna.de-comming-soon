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

	@include('pages.partials.contact-overlay')
@stop