@extends('partials.main')
@section('marcadoChoferes', 'active')
@section('encbezado', 'Seccion de asignacion de choferes a carros')
@section('cuerpo')
	<div class="continer-main">
		{!! Form::open([ 'route'=>'carro.store', 'method'=>'POST' ]) !!}
		  
		  <div class="form-group">
		    {!! Form::label('user_id', 'Seleccione el dueño del vehiculo:', []) !!}
		    {!! Form::select('user_id', $users, null , ['class'=>"form-control", 'placeholder'=>'Seleccione el dueño del vehiculo']) !!}
		  </div>

		  <div class="form-group">
		    {!! Form::label('marca', 'Ingrese la Marca:', []) !!}
		    {!! Form::text('marca', null, ['class'=>"form-control", 'placeholder'=>'Ingrese el Marca']) !!}
		  </div>
		  <div class="form-group">
		    {!! Form::label('modelo', 'Ingrese el modelo:', []) !!}
		    {!! Form::text('modelo', null, ['class'=>"form-control", 'placeholder'=>'Ingrese el modelo']) !!}
		  </div>
		  <div class="form-group">
		    {!! Form::label('placa', 'Ingrese el placa:', []) !!}
		    {!! Form::text('placa', null, ['class'=>"form-control", 'placeholder'=>'Ingrese el placa']) !!}
		  </div>
		  
		  <button type="submit" class="btn btn-outline-success">Registrar</button>
		{!! Form::close() !!}
	</div>
@stop