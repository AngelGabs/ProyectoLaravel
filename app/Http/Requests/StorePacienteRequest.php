<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePacienteRequest extends FormRequest
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
            'apellido' => 'required|string|max:255',
            'correo' => 'required|email|unique:pacientes,correo',
            'telefono' => 'nullable|numeric',
            'direccion' => 'nullable|string|max:255',
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
            'nombre.required' => 'El nombre del paciente es obligatorio.',
            'apellido.required' => 'El apellido es obligatorio.',
            'correo.required' => 'El correo electrónico es obligatorio.',
            'correo.email' => 'El correo debe ser una dirección de correo electrónico válida.',
            'correo.unique' => 'Este correo electrónico ya está registrado.',
            'telefono.numeric' => 'El teléfono debe ser un número válido.',
            'direccion.max' => 'La dirección no puede exceder los 255 caracteres.',
        ];
    }
}
