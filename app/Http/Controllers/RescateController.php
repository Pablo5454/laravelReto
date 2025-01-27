<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rescate;
use App\Models\Viaje;
use App\Http\Requests\RescateRequest;




class RescateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rescates = Rescate::all();
        return view('rescates.index', compact('rescates'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $viajes = Viaje::all();
        return view('rescates.create', compact('viajes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RescateRequest $request)
    {
        Rescate::create([
            'fecha_inicio'=>$request->fecha_inicio,
            'fecha_fin'=>$request->fecha_fin,
            'viaje_id'=>$request->viaje_id
        ]);
        return redirect()->route('rescates.index')->with('success', 'Rescate creado con éxito!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rescate $rescate)
    {
        return view ('rescates.show', compact('rescate'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rescate $rescate)
    {
        $viajes = Viaje::all();

        return view('rescates.edit', compact('rescate', 'viajes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RescateRequest $request, Rescate $rescate)
    {
        $rescate -> update($request -> all());

        return redirect()->route('rescates.index')->with('success', 'Rescate actualizado con éxito!');    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rescate $rescate)
    {
        $rescate -> delete();
        return redirect() -> route('rescates.index')->with('success', '¡Rescate eliminado con éxito!');    }
}
