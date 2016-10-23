<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Apigame</title>
		<meta name="author" content="Ruben Serna"/>
		<meta name="description" content="Api para la administración del juego">
		<meta name="keywords" content="api">
		<!--Import Google Icon Font-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="{{ URL::asset('css/materialize.css') }}"  media="screen,projection"/>
		<link type="text/css" rel="stylesheet" href="{{ URL::asset('css/screen.css') }}"  media="screen,projection"/>
		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>

	<body>
		<div class="row">
			<aside>
				<ul class="side-nav fixed col l2 m3">
					<header class="center">
						<div>
							<a id="logo" href="{{ URL::to('/') }}"><img src="{{ URL::asset('img/logo.png') }}" alt="Logo Uninorte FM"></a>
						</div>
					</header>
					<li class="{{ $class['subjects'] }}">
						<i class="material-icons">supervisor_account</i>
						{{ link_to('/', 'Materias', ['class' => 'nav-link']) }}
					</li>
					<li class="{{ $class['questions'] }}">
						<i class="material-icons">playlist_play</i>
						{{ link_to('/questions', 'Preguntas', ['class' => 'nav-link']) }}
				</ul>
			</aside>

			<section class="col l10 offset-l2 m9 offset-m3">
				@yield('content')
			</section>
		</div>

		<!--Import jQuery before materialize.js-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="{{ URL::asset('js/bin/materialize.min.js') }}"></script>
		<script type="text/javascript">
			$(document).ready(function(){
			// the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
				$('.modal-trigger').leanModal();
				$('.tooltipped').tooltip({delay: 50});
			});
		</script>
	</body>
</html>