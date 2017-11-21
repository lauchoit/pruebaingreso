@extends('partials.main')
@section('marcadoChoferes', 'active')
@section('encbezado', 'Seccion de asignacin de choferes a carros')
@section('cuerpo')
	<div class="continer-main">
		{!! Form::open([ 'route'=>'chofer.store', 'method'=>'POST' ]) !!}
		  
		  <div class="form-group">
		    {!! Form::label('user_id', 'Seleccione el usuario:', []) !!}
		    {!! Form::select('user_id', $users, null , ['class'=>"form-control", 'placeholder'=>'Seleccione el usuario']) !!}
		  </div>
		  <div class="form-group">
		    {!! Form::label('carro_id', 'Seleccione el Carro a asignar:', []) !!}
		    {!! Form::select('carro_id', $carros, null , ['class'=>"form-control", 'placeholder'=>'Seleccione el usuario']) !!}
		  </div>
		  
		  <button type="submit" class="btn btn-outline-success">Registrar</button>
		{!! Form::close() !!}
	</div>
@stop