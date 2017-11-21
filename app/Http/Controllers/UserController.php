<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        return view('users.index')
            ->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->fill($request->all());

        $user->save();

        $mensaje = "El usuario se registro correctamente";
        $tipo   = 'alert-success';

        return redirect()->route('usuario.index')
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
        $users = User::select('*')
            ->join('carros', 'carros.user_id', '=', 'users.id')
            ->where('carros.id', $id)
            ->get();

        //dd($users);
        return view('users.index')
            ->with('users', $users);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::select('*')
            ->join('choferes', 'choferes.user_id', '=', 'users.id')
            ->where('choferes.carro_id', $id)
            ->get();

        //dd($users);
        return view('users.index')
            ->with('users', $users);
    }

    public function editar($id)
    {
        $users = User::select('*')
            ->join('choferes', 'choferes.user_id', '=', 'users.id')
            ->where('choferes.carro_id', $id)
            ->get();

        //dd($users);
        return view('users.index')
            ->with('users', $users);
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
