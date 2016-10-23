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
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
		<link type="text/css" rel="stylesheet" href="css/screen.css"  media="screen,projection"/>
		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	</head>

	<body>
		<div class="row">
			<aside>
				<ul class="side-nav fixed col l2 m3">
					<li class="{{ $class['subjects'] }}">
						<i class="material-icons">account_balance</i>
						<a class="nav-link" href="/">Materias</a>
					</li>
					<li class="{{ $class['questions'] }}">
						<i class="material-icons">assignment</i>
						<a class="nav-link" href="/questions">Preguntas</a>
					</li>
				</ul>
			</aside>

			<section class="col l10 offset-l2 m9 offset-m3">
				@yield('content')
			</section>
		</div>

		<!--Import jQuery before materialize.js-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="js/materialize.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
			// the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
				$('.modal-trigger').leanModal();
				$('.tooltipped').tooltip({delay: 50});
				$('select').material_select();
			});
		</script>
	</body>
</html>