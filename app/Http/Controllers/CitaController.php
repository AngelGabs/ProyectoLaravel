<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use App\Models\Paciente;
use App\Models\Medico;
use Illuminate\Http\Request;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $citas = Cita::with('paciente', 'medico')->paginate(10); // Asegúrate de usar paginate()
        return view('Dashboard.citas.index', compact('citas'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pacientes = Paciente::all();
        $medicos = Medico::all();
        return view('Dashboard/citas.create', compact('pacientes', 'medicos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'paciente_id' => 'required|exists:pacientes,id',
        'medico_id' => 'required|exists:medicos,id',
        'fecha_cita' => 'nullable|date_format:Y-m-d',
        'hora_cita' => 'nullable|date_format:H:i:s',
        'estado' => 'required|in:Pendiente,Completada,Cancelada',
    ]);

    Cita::create($request->all());

    return redirect()->route('citas.index')->with('success', 'Cita registrada exitosamente.');
}
    /**
     * Display the specified resource.
     */
    public function show(Cita $cita)
    {
        return view('Dashboard/citas.show', compact('cita'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cita $cita)
    {
        $pacientes = Paciente::all();
        $medicos = Medico::all();
        return view('Dashboard/citas.edit', compact('cita', 'pacientes', 'medicos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cita $cita)
    {
        $request->validate([
            'paciente_id' => 'required|exists:pacientes,id',
            'medico_id' => 'required|exists:medicos,id',
            'fecha' => 'required|date',
            'hora' => 'required|date_format:H:i',
            'motivo' => 'nullable|string|max:500',
        ]);

        $cita->update($request->all());

        return redirect()->route('Dashboard/citas.index')
                         ->with('status', 'Cita actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cita = Cita::findOrFail($id);
        $cita->delete();
    
        return redirect()->route('citas.index')->with('success', 'Cita eliminada exitosamente.');
    }

    public function showDeleteForm($id)
    {
        $cita = Cita::findOrFail($id); // Encuentra la cita por su ID
        return view('Dashboard.citas.delete', compact('cita')); // Muestra la vista
    }
    
    
}

