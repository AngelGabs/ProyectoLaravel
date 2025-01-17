<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMedicoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true; // Cambiar a `false` si necesitas reglas de autorización específicas.
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'nombre' => 'required|string|max:255',
            'especialidad' => 'required|string|max:255',
            'telefono' => 'nullable|numeric',
            'horario_disponible' => 'nullable|string|max:255',
        ];
    }

    /**
     * Mensajes de error personalizados.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'nombre.required' => 'El nombre del médico es obligatorio.',
            'especialidad.required' => 'La especialidad es obligatoria.',
            'telefono.numeric' => 'El teléfono debe ser un número válido.',
            'horario_disponible.max' => 'El horario disponible no puede tener más de 255 caracteres.',
        ];
    }
}
