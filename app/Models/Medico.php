<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'especialidad', 'telefono', 'horario_disponible'];


    // Relación con especialidad
    public function especialidad()
    {
        return $this->belongsTo(Especialidad::class);
    }

    // Relación con citas
    public function citas()
    {
        return $this->hasMany(Cita::class);
    }
}
