@extends('partials.main')
@section('marcadoChoferes', 'active')
@section('encbezado', 'Choferes regitrados en e sistema')
@section('cuerpo')
	<div class="continer-main">
		<a href="{{ route('chofer.create') }}" class="btn btn-block btn-outline-warning"> ANIDAR CHOFER A CARRO </a>
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th> # </th>
					<th> Nombre </th>
					<th> Apellido </th>
					<th> Correo </th>
					<th class="text-center"> Carros que maneja </th>
				</tr>
			</thead>
			<tbody>
				@if ($choferes->count() > 0)
					
				@foreach ($choferes as $chofer)
				<tr>
					<td>{{ $loop->iteration }}</td>
					<td> {{ $chofer->name }} </td>
					<td> {{ $chofer->lastName }} </td>
					<td> {{ $chofer->email }} </td>
					<td>
						<a href="{{ route('carro.edit', $chofer->id) }}" class="btn btn-sm btn-outline-info btn-block">Ver</a>
					</td>
				</tr>
				@endforeach
				@else
					<tr>
						<td colspan="5">
							<div class="alert alert-info">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<strong>No tiene registros</strong> no tiene conductores registrados...
							</div>
						</td>
					</tr>
				@endif
			</tbody>
		</table>
	</div>
@stop