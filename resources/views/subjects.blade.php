@extends('layouts.app')

@section('content')

	<header id="headuser">
		<div class="row">
			<h2 class="center">Gestor de Materias</h2>
			<div class="divider"></div>
		</div>
	</header>

	<div class="row center">
		<a class="waves-effect waves-light btn modal-trigger" href="#modal-subject">Nueva Materia</a>
		<div id="modal-subject" class="modal">
			<div class="modal-content">
				<h4>Nueva Materia</h4>
				<div class="row">
					<form action="{{ url('/subject') }}" method="POST"  class="col s12">
						{!! csrf_field() !!}
						<div class="row">
							<div class="input-field col s10 offset-s1">
								<i class="material-icons prefix">account_balance</i>
								<input id="icon_prefix" type="text" name="name">
								<label for="icon_prefix">Nombre</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s10 offset-s1">
								<textarea id="icon_prefix" class="materialize-textarea" name="description"></textarea>
								<label for="icon_prefix">Descripción</label>
							</div>
						</div>
						<button type="submit" class="btn modal-action modal-close waves-effect waves-green">Guardar</button>
					</form>
				</div>
			</div>
		</div>
		@include('common.errors')
	</div>

	@if (count($subjects) > 0)
		<section class="row">

			<div class="col s12">
				<table class="striped">
					<thead>
						<tr>
							<th data-field="name">Nombre</th>
							<th data-field="description">Descripción</th>
						</tr>
					</thead>

					<tbody>
						@foreach ($subjects as $subject)

								<tr>
									<td><div>{{ $subject->name }}</div></td>
									<td><div>{{ $subject->description }}</div></td>
								</tr>

						@endforeach
					</tbody>
				</table>
			</div>

		</section>
	@endif

@endsection