<?php

namespace App\Http\Controllers;

use App\Carro;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class traspasoController extends Controller
{
  public function index()
  {
    $duenos = User::select(\DB::raw('* ,CONCAT(name," ", lastName) AS nombrecompleto'))->get();
    foreach ($duenos as $key => $dueno) {
      $dueno->r_carros;
      if (count($dueno->r_carros) == 0) {
        unset($duenos[$key]);
      }
    }

    $variable = $duenos->pluck('nombrecompleto', 'id');
    return view('traspaso.traspaso')->with('duenos', $variable);
  }
  public function buscarDato($id)
  {

    $carro = Carro::where('user_id', $id)->get();
    $user  = User::where('id', '<>', $id)->get();

    return response()->json(['carros' => $carro, 'usuario' => $user]);

  }
  public function actualizarCarro(Request $request)
  {
    $carro          = Carro::find($request->carros_propios);
    $carro->user_id = $request->usuario_traspaso;
    $carro->save();
    $users = User::all();

    return view('users.index')
      ->with('users', $users);
  }
}
