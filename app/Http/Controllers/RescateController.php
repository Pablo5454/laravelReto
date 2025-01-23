<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rescate;
use App\Models\Viaje;



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
    public function store(Request $request)
    {
        Rescate::create([
            'fecha_inicio'=>$request->fechaInicio,
            'fecha_fin'=>$request->fechaFin,
            'viaje'=>$request->viaje
        ]);
        return redirect()->route('rescates.index');
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
        return view('rescates.edit', compact('rescate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rescate $rescate)
    {
        $rescate -> update($request -> all());

        return redirect()->route('rescates.index');    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rescate $rescate)
    {
        $rescate -> delete();
        return redirect() -> route('rescates.index');    }
}
