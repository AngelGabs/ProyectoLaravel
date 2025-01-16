<?php

namespace App\Http\Controllers;

use App\Models\Medico; // Asegúrate de importar el modelo Medico
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Cambiar de 'Client::get()' a 'Medico::get()' si quieres listar médicos
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
    public function store(Request $request)
    {
        // Validar los campos del formulario
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'especialidad' => 'required|string|max:255', // Validación de especialidad
            'telefono' => 'nullable|numeric',
            'horario_disponible' => 'nullable|string|max:255',
        ]);
    
        // Crear el nuevo médico
        Medico::create($validated);
    
        return to_route('medicos.index')->with('status', 'Médico Registrado');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(Medico $medico)
    {
        return view('Dashboard.medicos.show', compact('medico'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Medico $medico)
    {
        return view('Dashboard.medicos.edit', compact('medico'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Medico $medico)
    {
        $medico->update($request->all());
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
