<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use App\Http\Requests\StoreMedicoRequest;  // Importa StoreMedicoRequest
use App\Http\Requests\UpdateMedicoRequest; // Importa UpdateMedicoRequest
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medicos = Medico::all(); // Obtener todos los médicos
        return view('Dashboard.medicos.index', compact('medicos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.medicos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMedicoRequest $request)
    {
        // La validación ya está gestionada en StoreMedicoRequest

        // Crear el nuevo médico
        Medico::create($request->validated());

        return to_route('medicos.index')->with('status', 'Médico Registrado');
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
    public function edit($id)
    {
        $medico = Medico::findOrFail($id);
        return view('Dashboard.medicos.edit', compact('medico'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMedicoRequest $request, Medico $medico)
    {
        // La validación ya está gestionada en UpdateMedicoRequest

        // Actualizar el médico
        $medico->update($request->validated());

        return redirect()->route('medicos.index')->with('status', 'Médico Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medico $medico)
    {
        $medico->delete();
        return redirect()->route('medicos.index')->with('status', 'Médico Eliminado');
    }
}
