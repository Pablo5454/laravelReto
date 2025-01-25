<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Viaje;
use App\Models\Rescate;

use App\Http\Requests\ViajeRequest;

class ViajeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $viajes = Viaje::all();
        return view('viajes.index', compact('viajes'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $rescates = Rescate::all();
        return view('viajes.create', compact('rescates'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ViajeRequest $request)
    {
        //
        // Viaje::create([
        //     'origen'=>$request->origen,
        //     'destino'=>$request->destino
        // ]);
        Viaje::create($request->all());

        return redirect()->route('viajes.index')->with('success', 'Viaje creado con éxito!');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Viaje $viaje)
    {
        //
        return view ('viajes.show', compact('viaje'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Viaje $viaje)
    {
        $rescates = Rescate::all();

        return view('viajes.edit', compact('viaje', 'rescates'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ViajeRequest $request, Viaje $viaje)
    {
        //
        $viaje -> update($request -> all());

        return redirect()->route('viajes.index')->with('success', 'Médico actualizado con éxito!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Viaje $viaje)
    {
        //
        $viaje -> delete();
        return redirect() -> route('viajes.index')->with('success', '¡Viaje eliminado con éxito!');
    }
}
