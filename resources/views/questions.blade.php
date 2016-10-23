@extends('layouts.app')

@section('content')

	<header id="headuser">
		<div class="row">
			<h2 class="center">Gestor de Preguntas</h2>
			<div class="divider"></div>
		</div>
	</header>

	<div class="row center">
		<a class="waves-effect waves-light btn modal-trigger" href="#modal-question">Nueva Pregunta</a>
		<div id="modal-question" class="modal">
			<div class="modal-content">
				<h4>Nueva Materia</h4>
				<div class="row">
					<form action="{{ url('/question') }}" method="POST"  class="col s12">
						{!! csrf_field() !!}

						<div class="row">
							<div class="input-field col s10 offset-s1">
								<i class="material-icons prefix">assignment</i>
								<input id="icon_prefix" type="text" name="statement">
								<label for="icon_prefix">Enunciado</label>
							</div>
						</div>

						<div class="row">
							<div class="input-field col s5 offset-s1">
								<i class="material-icons prefix">extension</i>
								<input id="icon_prefix" type="text" name="opA">
								<label for="icon_prefix">Opción A</label>
							</div>

							<div class="input-field col s5 offset-s1">
								<i class="material-icons prefix">extension</i>
								<input id="icon_prefix" type="text" name="opC">
								<label for="icon_prefix">Opción C</label>
							</div>
						</div>

						<div class="row">
							<div class="input-field col s5 offset-s1">
								<i class="material-icons prefix">extension</i>
								<input id="icon_prefix" type="text" name="opB">
								<label for="icon_prefix">Opción B</label>
							</div>

							<div class="input-field col s5 offset-s1">
								<i class="material-icons prefix">extension</i>
								<input id="icon_prefix" type="text" name="opD">
								<label for="icon_prefix">Opción D</label>
							</div>
						</div>

						<div class="row">
							<div class="input-field col s3 offset-s1">
								{{ Form::select('subject', $subjects, null, ['placeholder' => 'Seleccionar...']
									)
								}}
								<label>Materia</label>
							</div>

							<div class="input-field col s3 offset-s1">
								<select name="complexity">
									<option value="" disabled selected>Seleccionar...</option>
									<option value="1">Baja</option>
									<option value="2">Media</option>
									<option value="3">Alta</option>
								</select>
								<label>Complejidad</label>
							</div>

							<div class="input-field col s3 offset-s1">
								<select name="opOK">
									<option value="" disabled selected>Seleccionar...</option>
									<option value="A" selected>A</option>
									<option value="B">B</option>
									<option value="C">C</option>
									<option value="D">D</option>
								</select>
								<label>Opción correcta</label>
							</div>
						</div>

						<button type="submit" class="btn modal-action modal-close waves-effect waves-green">Guardar</button>
					</form>
				</div>
			</div>
		</div>
		@include('common.errors')
	</div>

	@if (count($questions) > 0)
		<section class="row">

			<div class="col s12">
				<table class="striped">
					<thead>
						<tr>
							<th data-field="statement">Enunciado</th>
							<th data-field="subject">Materia</th>
							<th data-field="complexity">Complejidad</th>
							<th data-field="time">Tiempo</th>
							<th data-field="opOK">Respuesta</th>
						</tr>
					</thead>

					<tbody>
						@foreach ($questions as $question)

								<tr>
									<td><div>{{ $question->statement }}</div></td>
									<td><div>{{ $question->subject }}</div></td>
									<td><div>{{ $question->complexity }}</div></td>
									<td><div>{{ $question->time }}</div></td>
									<td><div>{{ $question->opOK }}</div></td>
								</tr>

						@endforeach
					</tbody>
				</table>
			</div>

		</section>
	@endif

@endsection