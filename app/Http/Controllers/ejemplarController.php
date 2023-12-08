<?php

namespace App\Http\Controllers;

use App\Models\Ejemplar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ejemplarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ejemplares=Ejemplar::all();
        return view('dashboard.ejemplar.index',['ejemplar'=>$ejemplares]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.ejemplar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ejemplar=new Ejemplar();
        $ejemplar->Codigo=$request->input('codigo');
        $ejemplar->Localizacion=$request->input('localizacion');
        $ejemplar->save();
       return view('dashboard.ejemplar.message',['msg'=>"Ejemplar creado con exito"]);
       // return view('dashboard.ejemplar.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ejemplar $ejemplar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $ejemplar=Ejemplar::find($id);
        return view('dashboard.ejemplar.edit',['ejemplar'=>$ejemplar]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $ejemplar=Ejemplar::find($id);
        $ejemplar->Codigo=$request->input('codigo');
        $ejemplar->Localizacion=$request->input('localizacion');
        $ejemplar->save();
        return redirect("dashboard/ejemplar");
 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ejemplar=Ejemplar::find($id);
        $ejemplar->delete();
        return redirect("dashboard/ejemplar");
    }
}
