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
				@foreach ($carros as $carro)
				<tr>
					<td>{{ $loop->iteration }}</td>
					<td> {{ $carro->marca }} </td>
					<td> {{ $carro->modelo }} </td>
					<td> {{ $carro->placa }} </td>
					<td>
						<a href="#" class="btn btn-sm btn-outline-info btn-block">Ver</a>
					</td>
					<td>
						<a href="#" class="btn btn-sm btn-outline-success btn-block">Ver</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop