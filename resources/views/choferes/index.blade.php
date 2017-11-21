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
				@foreach ($choferes as $chofer)
				<tr>
					<td>{{ $loop->iteration }}</td>
					<td> {{ $chofer->name }} </td>
					<td> {{ $chofer->lastName }} </td>
					<td> {{ $chofer->email }} </td>
					<td>
						<a href="#" class="btn btn-sm btn-outline-info btn-block">Ver</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop