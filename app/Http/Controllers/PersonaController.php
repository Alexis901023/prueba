<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos = Personas::all();
    
        return view('presona.index', compact('personas')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('personas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $persona = request()->except('_token');
        Persona::insert($persona);
        return redirect('personas');
    }

        /**
     * Show the form for editing the specified resource.
     */
    public function show(Persona $persona)
    {
        return view('personas.show', [
            'photo' => Persona::findOrFail($persona)
        ]);
    }  

    
    public function edit(Persona $persona)
    {
        return view('personas.edit', compact('persona'));
    }

    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Persona $persona)
    {
        $persona = Persona::find($persona);

        $persona->nombre = $request->nombre;
        $persona->apellidos = $request->apellidos;
        $persona->edad = $request->edad;
        $persona->sexo = $request->sexo;
        $persona->correo = $request->sexo;

        $persona->save();
        return redirect('personas');
    }
    /**
     * Remove the specified resource from storage.
     */
   
    public function destroy($id)
    {
        Persona::destroy($id);
        return redirect('personas');
    }
}
