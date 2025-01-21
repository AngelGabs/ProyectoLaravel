<?php
//Aqui
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
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'especialidad' => 'nullable|string|max:255',
            'telefono' => 'nullable|numeric',
            'horario_disponible' => 'nullable|string|max:255',
        ], [
            'nombre.required' => 'El nombre del médico es obligatorio.',
            'especialidad.string' => 'La especialidad debe ser un texto.',
            'telefono.numeric' => 'El teléfono debe ser un número válido.',
            'horario_disponible.string' => 'El horario disponible debe ser un texto válido.',
        ]);
    
        dd($request->all());
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
