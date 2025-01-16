<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    use HasFactory;

    protected $fillable = [
        'paciente_id',
        'doctor_id',
        'fecha',
        'hora',
        'estado',
    ];

    // Relación con pacientes
    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }

    // Relación con doctores
    public function medico()
    {
        return $this->belongsTo(Medico::class);
    }
}
