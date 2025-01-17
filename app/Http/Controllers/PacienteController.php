<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Http\Requests\StorePacienteRequest;  // Importa StorePacienteRequest
use App\Http\Requests\UpdatePacienteRequest; // Importa UpdatePacienteRequest
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pacientes = Paciente::all(); // Obtener todos los pacientes
        return view('Dashboard.pacientes.index', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.pacientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePacienteRequest $request)
    {
        // La validación ya está gestionada en StorePacienteRequest

        // Crear el nuevo paciente
        Paciente::create($request->validated());

        return to_route('pacientes.index')->with('status', 'Paciente Registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(Paciente $paciente)
    {
        return view('Dashboard.pacientes.show', compact('paciente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Paciente $paciente)
    {
        return view('Dashboard.pacientes.edit', compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePacienteRequest $request, Paciente $paciente)
    {
        // La validación ya está gestionada en UpdatePacienteRequest

        // Actualizar el paciente
        $paciente->update($request->validated());

        return redirect()->route('pacientes.index')->with('status', 'Paciente Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Paciente $paciente)
    {
        $paciente->delete();
        return redirect()->route('pacientes.index')->with('status', 'Paciente Eliminado');
    }
}
