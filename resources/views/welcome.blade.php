@extends('partials.main')
@section('marcadoInicio', 'active')
@section('cuerpo')
    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <h1 class="display-3">Ejemplo para realizar</h1>
        <p class="lead">Este ejemplo cuenta con varias opciones q se deben realizar para su correcto finalizacion. Las mismas se enumeran a continuacion: 
            <pre style="color: red"> Tiene hasta el lunes 29/04/2019 a las 4:00PM para entregar los resultados </pre>
        </p>
        <ul>
            <li>Un dueño puede tener muchos carros</li>
            <li>Un carro tiene un solo dueño</li>
            <li>Un carro puede tener muchos choferes</li>
            <li>un dueño puede traspasar un carro</li>
            <li>Un chofer puede manejar muchos carros</li>
        </ul>
        <p> <strong>NOTA:</strong> Evitar redundancia cuando se da un registro de alta en la base de datos</p>
      </div>
    </div>
@stop