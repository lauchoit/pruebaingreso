@extends('partials.main')
@section('marcadoCarro', 'active')
@section('encbezado', 'Carros regitrados en e sistema')
@section('cuerpo')
	<div class="continer-main">
		<a href="{{ route('carro.create') }}" class="btn btn-block btn-outline-warning"> REGISTRAR NUEVO CARRO </a>
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th> # </th>
					<th> Marca </th>
					<th> Modelo </th>
					<th> Placa </th>
					<th> Dueño ..</th>
					<th> Choferes </th>
				</tr>
			</thead>
			<tbody>
				@if (count($carros) > 0)
					@foreach ($carros as $carro)
					<tr>
						<td>{{ $loop->iteration }}</td>
						<td> {{ $carro->marca }} </td>
						<td> {{ $carro->modelo }} </td>
						<td> {{ $carro->placa }} </td>
						<td>
							<a href="{{ route('usuario.show', $carro->id) }}" class="btn btn-sm btn-outline-info btn-block">Ver</a>
						</td>
						<td>
							<a href="{{ route('chofer.index') }}"" class="btn btn-sm btn-outline-success btn-block">Ver</a>
						</td>
					</tr>
					@endforeach
				@else
					<tr>
						<td colspan="6">
							<div class="alert alert-info">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<strong>No tiene registros</strong> no tiene vehiculos registrados
							</div>
						</td>
					</tr>
				@endif
			</tbody>
		</table>
	</div>
@stop