@extends('partials.main')
@section('marcadoUsuario', 'active')
@section('encbezado', 'Usuarios regitrados en e sistema')
@section('cuerpo')
	<div class="continer-main">
		<a href="{{ route('usuario.create') }}" class="btn btn-block btn-outline-warning"> REGISTRAR NUEVO USUARIO </a>
		<table class="table table-hover table-striped">
			<thead>
				<tr>
					<th> # </th>
					<th> Nombre </th>
					<th> Apellido </th>
					<th> Email </th>
					<th> Ver carros ..</th>
					<th> Manejados </th>
					<th> Edit </th>
				</tr>
			</thead>
			<tbody>
				@foreach ($users as $user)
				<tr>
					<td>{{ $loop->iteration }}</td>
					<td> {{ $user->name }} </td>
					<td> {{ $user->lastName }} </td>
					<td> {{ $user->email }} </td>
					<td>
						<a href="" class="btn btn-sm btn-outline-info btn-block">Ver</a>
					</td>
					<td>
						<a href="#" class="btn btn-sm btn-outline-success btn-block">Ver</a>
					</td>
					<td>
						<a href="#" class="btn btn-sm btn-outline-danger btn-block">edit</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop