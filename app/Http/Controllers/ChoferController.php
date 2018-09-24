<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Choferes;
use App\User;
use App\Carro;

class ChoferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $choferes = User::select('*')
            ->get();
        foreach ($choferes as $key => $chofer) {
            if( $chofer->r_choferes->isEmpty() ){
                unset($choferes[$key]);  
            }
        }

        return view('choferes.index')
            ->with('choferes', $choferes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::select(DB::raw('* ,CONCAT(name," ", lastName) AS nombrecompleto'))->pluck('nombrecompleto', 'id');
        $carros = Carro::select(DB::raw('* ,CONCAT(marca," ", modelo, " placa: ", placa) AS fullCar'))->pluck('fullCar', 'id');

        return view('choferes.create')
            ->with('users', $users)
            ->with('carros', $carros);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $c = Choferes::find($request->user_id.$request->carro_id);
        //dd($request->user_id.$request->carro_id);

        if($c == NULL ){

        $chof = new Choferes();
        $chof->fill($request->all());
        $chof->id = $request->user_id.$request->carro_id;

        $chof->save();

        $mensaje = "El vehiculo se asigno correctamente";
        $tipo   = 'alert-success';

        return redirect()->route('chofer.index')
            ->with('mensaje', $mensaje)
            ->with('tipo', $tipo);

        }else{
            $mensaje = "El vehiculo ya se encuentra asignado a este conductor";
            $tipo   = 'alert-danger';
            return redirect()->route('chofer.index')
                ->with('mensaje', $mensaje)
                ->with('tipo', $tipo);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
