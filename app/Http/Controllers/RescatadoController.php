<?php

namespace App\Http\Controllers;
use App\Http\Requests\RescatadoRequest;

use Illuminate\Http\Request;
use App\Models\Rescatado;
use App\Models\Medico;
use App\Models\Rescate;


class RescatadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rescatados = Rescatado::all();
        return view('rescatados.index', compact('rescatados'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $medicos = Medico::all();
        $rescates = Rescate::all();
        return view('rescatados.create', compact('medicos', 'rescates'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RescatadoRequest $request)
    {
        Rescatado::create([
            'nombre'=>$request->nombre,
            'foto'=>$request->foto,
            'edad'=>$request->edad,
            'sexo'=>$request->sexo,
            'procedencia'=>$request->procedencia,
            'valoracion_medica'=>$request->valoracion_medica,
            'medico_id'=>$request->medico_id,
            'rescate_id'=>$request->rescate_id
        ]);

        return redirect()->route('rescatados.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rescatado $rescatado)
    {
        return view('rescatados.show', compact('rescatado'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rescatado $rescatado)
    {
        return view('rescatados.edit', compact('rescatado'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RescatadoRequest $request, Rescatado $rescatado)
    {
        $rescatado -> update($request -> all());

        return redirect()->route('rescatados.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rescatado $rescatado)
    {
        $rescatado -> delete();
        return redirect() -> route('rescatados.index');
    }
}
