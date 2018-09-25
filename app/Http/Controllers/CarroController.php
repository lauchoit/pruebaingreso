<?php

namespace App\Http\Controllers;

use App\Carro;
use App\Choferes;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarroController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $carros = Carro::all();

    return view('carros.index')
      ->with('carros', $carros);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $users = User::select(DB::raw('* ,CONCAT(name," ", lastName) AS nombrecompleto'))->pluck('nombrecompleto', 'id');
    return view('carros.create')
      ->with('users', $users);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $carro = new Carro();
    $carro->fill($request->all());

    $carro->save();

    $mensaje = "El vehiculo se registro correctamente";
    $tipo    = 'alert-success';

    return redirect()->route('carro.index')
      ->with('mensaje', $mensaje)
      ->with('tipo', $tipo);
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //dd($id);
    $carros = Carro::where('user_id', $id)
      ->get();

    return view('carros.index')
      ->with('carros', $carros);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    $choferes = Choferes::where('user_id', $id)
      ->get();
    //$carros[] = NULL;
    //dd(count($choferes));
    $carros = [];
    foreach ($choferes as $key => $carro) {
      $carro->r_carro;
      $carros[$key] = $carro->r_carro;
      //unset($choferes[$key]);
    }

    return view('carros.index')
      ->with('carros', $carros);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //
  }
}
