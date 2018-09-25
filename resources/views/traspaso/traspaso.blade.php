@extends('partials.main')
@section('marcadoTraspaso', 'active')
@section('encbezado', 'Seccion traspaso de carro')
@section('cuerpo')
	<div class="continer-main">
		
       {!! Form::open([ 'route'=>'traspaso.actualizarCarro', 'method'=>'POST' ]) !!}
		  <div class="form-group">
		    {!! Form::label('user_id', 'Seleccione el dueño:', []) !!}
		    {!! Form::select('user_id', $duenos, null , ['class'=>"form-control",'id' => 'userS', 'placeholder'=>'Seleccione el usuario']) !!}
		  </div>
			 
		  <div class="form-group">
		    {!! Form::label('carros_id', 'Carros propios:', []) !!}
		     <select name="carros_propios" class="form-control p-0" id='carros_propios'></select>
		  </div>

		   <div class="form-group">
		    {!! Form::label('usert_id', 'Usuario traspaso:', []) !!}
		     <select name="usuario_traspaso" class="form-control p-0" id='usuario_traspaso'></select>
		  </div>

		  <button type="submit" class="btn btn-outline-success">Actualizar</button>

	  {!! Form::close() !!}
	</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
  jQuery(document).ready(function($) {
      $('#userS').change(function () {
       $('#carros_propios').empty();
       $('#usuario_traspaso').empty();
       var userSelect = $(this).val();
       var url = "{{ url('buscar/') }}/"+ userSelect;

        datos = {
          tipo : userSelect
        },

        $.ajax({
          url: url,
          type: 'GET',
          data: datos,
          success: function (argument) {
          	console.log(argument);
            // $('#detalle_ingreso').empty();
  /*          arreglo = {id:"a", tipo:""};
            argument.detalles.unshift(arreglo); */

            $.each(argument.carros, function(index, el) {
              
              var opcion = '<option value="'+ el.id +'">'+ el.marca + ' ' + el.modelo +' '+ el.placa +'</option>';
              $('#carros_propios').append( opcion );
            });

            $.each(argument.usuario, function(index, el) {
              var opcion = '<option value="'+ el.id +'">'+ el.name + ' ' + el.lastName +'</option>';
              $('#usuario_traspaso').append( opcion );
            });
          }
        })
      
      })
     });
	</script>
@stop