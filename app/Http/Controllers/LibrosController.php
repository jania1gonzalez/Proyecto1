<?php

namespace App\Http\Controllers;

use App\Models\Libros;
use Illuminate\Http\Request;

class LibrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libros = Libros::all();
        return view('libros.indexLibros', compact ('libros'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('libros.createLibros');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validacion
        
        $validated= $request->validate([
            'nombre'  => 'required',
            'correo'  => 'required|email',
            'libros' =>'required',
            'ciudad'  => 'required',
        ]);

        $libros = new Libros(); 
        $libros->nombre=$request->nombre;
        $libros->correo=$request->correo;
        $libros->comentario=$request->comentario;
        $libros->ciudad=$request->ciudad;
        $libros->save(); 
    
    
        return redirect()->back();
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Libros $libros)
    {

        return view ('libros.showLibros', compact('libros'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Libros $libros)
    {
        return view ('libros.editLibros', compact ('libros'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Libros $libros) // request es lo que recibe de la web y el libros es la informacion de la BD
    {

        //Validacion
        
        $validated= $request->validate([
            'nombre'  => 'required',
            'correo'  => 'required|email',
            'libros' =>'required',
            'ciudad'  => 'required',
        ]);
        
        $libros->nombre=$request->nombre;
        $libros->correo=$request->correo;
        $libros->comentario=$request->comentario;
        $libros->ciudad=$request->ciudad;
        $libros->save(); 

        return redirect()->route('libros.show',$libros);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Libros $libros)
    {
        $libros->delete();
        return redirect()->route('libros.index');
    }
}
