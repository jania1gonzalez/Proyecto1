<?php

namespace App\Http\Controllers;

use App\Models\Editoriales;
use Illuminate\Http\Request;

class EditorialesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $editoriales = Editoriales::all();
        return view('editoriales.indexEditoriales', compact ('editoriales'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('editoriales.createEditoriales');
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
            'editoriales' =>'required',
            'ciudad'  => 'required',
        ]);

        $editoriales = new Editoriales(); 
        $editoriales->nombre=$request->nombre;
        $editoriales->correo=$request->correo;
        $editoriales->comentario=$request->comentario;
        $editoriales->ciudad=$request->ciudad;
        $editoriales->save(); 
    
    
        return redirect()->back();
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Editoriales $editoriales)
    {

        return view ('editoriales.showEditoriales', compact('editoriales'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Editoriales $editoriales)
    {
        return view ('editoriales.editEditoriales', compact ('editoriales'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Editoriales $editoriales) // request es lo que recibe de la web y el editoriales es la informacion de la BD
    {

        //Validacion
        
        $validated= $request->validate([
            'nombre'  => 'required',
            'correo'  => 'required|email',
            'editoriales' =>'required',
            'ciudad'  => 'required',
        ]);
        
        $editoriales->nombre=$request->nombre;
        $editoriales->correo=$request->correo;
        $editoriales->comentario=$request->comentario;
        $editoriales->ciudad=$request->ciudad;
        $editoriales->save(); 

        return redirect()->route('editoriales.show',$editoriales);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Editoriales $editoriales)
    {
        $editoriales->delete();
        return redirect()->route('editoriales.index');
    }
}
