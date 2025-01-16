<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCitaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Cambiar si necesitas validaciones de autorización específicas
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'fecha' => 'required|date|after:today', // Validar que la fecha sea futura
            'hora' => 'required|date_format:H:i', // Validar formato de hora (24 horas)
            'medico_id' => [
                'required',
                'exists:medicos,id', // Verificar que el médico exista
            ],
            'paciente_id' => [
                'required',
                'exists:pacientes,id', // Verificar que el paciente exista
            ],
            'motivo' => 'nullable|string|max:255', // Campo opcional para el motivo de la cita
        ];
    }

    /**
     * Custom error messages for validation.
     */
    public function messages(): array
    {
        return [
            'fecha.required' => 'La fecha de la cita es obligatoria.',
            'fecha.after' => 'La fecha debe ser en el futuro.',
            'hora.required' => 'La hora de la cita es obligatoria.',
            'hora.date_format' => 'El formato de la hora debe ser HH:mm.',
            'medico_id.required' => 'Es necesario asignar un médico a la cita.',
            'medico_id.exists' => 'El médico seleccionado no existe.',
            'paciente_id.required' => 'Es necesario asignar un paciente a la cita.',
            'paciente_id.exists' => 'El paciente seleccionado no existe.',
        ];
    }
}
