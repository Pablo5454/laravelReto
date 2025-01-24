<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MedicoRequest;
use App\Models\Medico;

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
      
    $medicos = Medico::all();
    return view('medicos.index', compact('medicos'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $medico = new Medico;
        // $medico -> nombre = "Begoña";
        // $medico -> apellido = "Begoñez";
        // $medico -> fecha_incorporacion = "01/12/1212";
        // $medico -> viaje_id = "01";

        // $medico -> save();

        return view('medicos.create');
    }


    /**
     * Store a newly created resource in storage.
     */

    public function store(MedicoRequest $request)
    {
        Medico::create([
            'nombre'=>$request->nombre,
            'apellido'=>$request->apellido,
            'fecha_incorporacion'=>$request->fechaIncorporacion,
            'viaje_id'=>$request->viajeId
        ]);
        // Medico::create($request->all());

        return redirect()->route('medicos.index');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Medico $medico)
    {
        return view('medicos.show', compact('medico'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Medico $medico)
    {
        return view('medicos.edit', compact('medico'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MedicoRequest $request, Medico $medico)
    {
        $medico -> update($request -> all());

        return redirect()->route('medicos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medico $medico)
    {
        $medico -> delete();
        return redirect() -> route('medicos.index');
    }
}
