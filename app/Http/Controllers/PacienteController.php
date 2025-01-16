<?php

namespace App\Http\Controllers;

use App\Models\Paciente; // Importar el modelo Paciente
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener todos los pacientes
        $pacientes = Paciente::all();
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
    public function store(Request $request)
    {
        // Validar los campos del formulario
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'correo' => 'required|email|unique:pacientes,correo',
            'telefono' => 'nullable|numeric',
            'direccion' => 'nullable|string|max:255',
        ]);

        // Crear el nuevo paciente
        Paciente::create($validated);

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
    public function update(Request $request, Paciente $paciente)
    {
        // Validar los campos actualizados
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'correo' => 'required|email|unique:pacientes,correo,' . $paciente->id,
            'telefono' => 'nullable|numeric',
            'direccion' => 'nullable|string|max:255',
        ]);

        // Actualizar el paciente
        $paciente->update($validated);

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
