<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class libroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libro=Libro::all();
        return view('dashboard.libro.index',['libro'=>$libro]);
        //return view('dashboard.libro.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.libro.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $libro=new libro();
        $libro->Codigo=$request->input('codigo');
        $libro->Titulo=$request->input('libro');
        $libro->ISBN=$request->input('isbn');
        $libro->Editorial=$request->input('editorial');
        $libro->Paginas=$request->input('paginas');
        $libro->save();
       return view('dashboard.libro.message',['msg'=>" Libro registrado con exito"]);
       // return view('dashboard.autor.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Libro $libro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $libro=Libro::find($id);
        return view('dashboard.libro.edit',['libro'=>$libro]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $libro=Libro::find($id);
        $libro->Codigo=$request->input('codigo');
        $libro->Titulo=$request->input('libro');
        $libro->ISBN=$request->input('isbn');
        $libro->Editorial=$request->input('editorial');
        $libro->Paginas=$request->input('paginas');
        $libro->save();
        return redirect("dashboard/libro");
 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $libro=Libro::find($id);
        $libro->delete();
        return redirect("dashboard/libro");
    }
}
