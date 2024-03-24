<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $libros = Libro::all();
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
            'id_autor'  => 'numeric',
            'unidades_fisicas' =>'required',
            'sinopsis'  => 'required',
        ]);

        $libro = new Libro(); 
        $libro->nombre=$request->nombre;
        $libro->id_autor=$request->id_autor;
        $libro->sinopsis=$request->sinopsis;
        $libro->unidades_fisicas=$request->unidades_fisicas;
        $libro->genero=$request->genero;
        if ($libro->virtual == true) {
            $libro->virtual=true;
        }else{
            $libro->virtual=false;
        }
        $libro->save(); 
    
    
        return redirect()->back();
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Libro $libro)
    {

        return view ('libros.showlibros', compact('libro'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Libro $libro)
    {
        return view ('libros.editLibros', compact ('libro'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Libro $libro) // request es lo que recibe de la web y el libro es la informacion de la BD
    {

        //Validacion
        
        $validated= $request->validate([
            'nombre'  => 'required',
            'id_autor'  => 'numeric',
            'unidades_fisicas' =>'required',
            'sinopsis'  => 'required',
        ]);
        
        
        $libro->nombre=$request->nombre;
        $libro->id_autor=$request->id_autor;
        $libro->sinopsis=$request->sinopsis;
        $libro->unidades_fisicas=$request->unidades_fisicas;
        $libro->genero=$request->genero;
        $libro->virtual=$request->virtual;
        return redirect()->route('libro.show',$libro);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Libro $libro)
    {
        $libro->delete();
        return redirect()->route('libro.index');
    }
}
