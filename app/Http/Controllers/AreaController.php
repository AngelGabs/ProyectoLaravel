<?php
namespace App\Http\Controllers;

use App\Http\Requests\StoreAreaRequest;
use App\Http\Requests\UpdateAreaRequest;
use App\Models\Area;

class AreaController extends Controller
{
    /**
     * Mostrar el listado de áreas.
     */
    public function index()
    {
        $areas = Area::all(); // Obtener todas las áreas
        return view('Dashboard/areas.index', compact('areas'));
    }

    /**
     * Mostrar el formulario para crear un área nueva.
     */
    public function create()
    {
        return view('Dashboard/areas.create');
    }

    /**
     * Guardar una nueva área en la base de datos.
     */
    public function store(StoreAreaRequest $request)
    {
        // La validación se realiza automáticamente antes de ejecutar este código

        // Crear el área
        Area::create($request->all());

        // Redirigir con un mensaje de éxito
        return redirect()->route('areas.index')->with('success', 'Área creada exitosamente.');
    }

    /**
     * Mostrar el formulario para editar un área existente.
     */
    public function edit($id)
    {
        $area = Area::findOrFail($id); // Buscar el área por ID
        return view('Dashboard/areas.edit', compact('area'));
    }

    /**
     * Actualizar un área existente.
     */
    public function update(UpdateAreaRequest $request, $id)
    {
        // La validación se realiza automáticamente antes de ejecutar este código

        // Actualizar el área
        $area = Area::findOrFail($id);
        $area->update($request->all());

        // Redirigir con un mensaje de éxito
        return redirect()->route('areas.index')->with('success', 'Área actualizada exitosamente.');
    }

    /**
     * Eliminar un área de la base de datos.
     */
    public function destroy($id)
    {
        $area = Area::findOrFail($id);
        $area->delete();

        // Redirigir con un mensaje de éxito
        return redirect()->route('areas.index')->with('success', 'Área eliminada exitosamente.');
    }
}

