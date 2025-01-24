<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tripulante;
use App\Http\Requests\TripulanteRequest;

use App\Models\Viaje;


class TripulanteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tripulantes = Tripulante::all();
        return view('tripulantes.index', compact('tripulantes'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $viajes = Viaje::all();

        return view('tripulantes.create', compact('viajes'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TripulanteRequest $request)
    {
        Tripulante::create([
            'nombre'=>$request->nombre,
            'apellido'=>$request->apellido,
            'rol'=>$request->rol,
            'fecha_incorporacion'=>$request->fecha_incorporacion,
            'viaje_id'=>$request->viaje_id
        ]);
        // Tripulante::create($request->all());

        return redirect()->route('tripulantes.index');
     
    }

    /**
     * Display the specified resource.
     */
    public function show(Tripulante $tripulante)
    {
        return view('tripulantes.show', compact('tripulante'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tripulante $tripulante)
    {
        return view('tripulantes.edit', compact('tripulante'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TripulanteRequest $request, Tripulante $tripulante)
    {
        $tripulante -> update($request -> all());

        return redirect()->route('tripulantes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tripulante $tripulante)
    {
        $tripulante -> delete();
        return redirect() -> route('tripulantes.index');
    }
}
