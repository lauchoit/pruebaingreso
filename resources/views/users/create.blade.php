@extends('partials.main')
@section('marcadoUsuario', 'active')
@section('encbezado', 'Seccion de registro de usuario')
@section('cuerpo')
	<div class="continer-main">
		{!! Form::open([ 'route'=>'usuario.store', 'method'=>'POST' ]) !!}
		  <div class="form-group">
		    {!! Form::label('name', 'Ingrese el Nombre:', []) !!}
		    {!! Form::text('name', null, ['class'=>"form-control", 'placeholder'=>'Ingrese el nombre']) !!}
		  </div>
		  <div class="form-group">
		    {!! Form::label('lastName', 'Ingrese el Apellido:', []) !!}
		    {!! Form::text('lastName', null, ['class'=>"form-control", 'placeholder'=>'Ingrese el Apellido']) !!}
		  </div>
		  <div class="form-group">
		    {!! Form::label('email', 'Ingrese el email:', []) !!}
		    {!! Form::text('email', null, ['class'=>"form-control", 'placeholder'=>'Ingrese el email']) !!}
		  </div>
		  <div class="form-group">
		  	{!! Form::label('password', 'Ingrese la Clave', []) !!}	
		  	{!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'Ingrese la clave']) !!}
		  </div>
		  <button type="submit" class="btn btn-outline-success">Registrar</button>
		{!! Form::close() !!}
	</div>
@stop