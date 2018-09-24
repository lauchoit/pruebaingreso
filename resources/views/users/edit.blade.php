@extends('partials.main')
@section('marcadoUsuario', 'active')
@section('encbezado', 'Seccion de edicion de usuario')
@section('cuerpo')
	<div class="continer-main">
		{!! Form::open([ 'route'=>['usuario.update', $user], 'method'=>'put' ]) !!}
		  <div class="form-group">
		    {!! Form::label('name', 'Ingrese el Nombre:', []) !!}
		    {!! Form::text('name', $user->name, ['class'=>"form-control", 'placeholder'=>'Ingrese el nombre']) !!}
		  </div>
		  <div class="form-group">
		    {!! Form::label('lastName', 'Ingrese el Apellido:', []) !!}
		    {!! Form::text('lastName', $user->lastName, ['class'=>"form-control", 'placeholder'=>'Ingrese el Apellido']) !!}
		  </div>
		  <div class="form-group">
		    {!! Form::label('email', 'Ingrese el email:', []) !!}
		    {!! Form::text('email', $user->email, ['class'=>"form-control", 'placeholder'=>'Ingrese el email']) !!}
		  </div>
		  <button type="submit" class="btn btn-outline-success">Registrar</button>
		{!! Form::close() !!}
	</div>
@stop