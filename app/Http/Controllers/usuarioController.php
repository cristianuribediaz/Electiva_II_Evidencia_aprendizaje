<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class usuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios=Usuario::all();
        return view('dashboard.usuario.index',['usuario'=>$usuarios]);
     
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $usuario=new usuario();
        $usuario->Codigo=$request->input('codigo');
        $usuario->Nombre=$request->input('nombre');
        $usuario->Telefono=$request->input('telefono');
        $usuario->Direccion=$request->input('direccion');
        $usuario->save();
       return view('dashboard.usuario.message',['msg'=>" Usuario registrado con exito"]);
       
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $usuario=Usuario::find($id);
        return view('dashboard.usuario.edit',['usuario'=>$usuario]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $usuario=Usuario::find($id);
        $usuario->Codigo=$request->input('codigo');
        $usuario->Nombre=$request->input('nombre');
        $usuario->Telefono=$request->input('telefono');
        $usuario->Direccion=$request->input('direccion');
        $usuario->save();
        return redirect("dashboard/usuario");
 
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $usuario=Usuario::find($id);
        $usuario->delete();
        return redirect("dashboard/usuario");
    }
}
