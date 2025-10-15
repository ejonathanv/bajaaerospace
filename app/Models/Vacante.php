<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacante extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'empresa',
        'ubicacion',
        'tipo',
        'sueldo',
        'contacto',
        'descripcion',
        'flyer',
        'activa',
    ];

    protected $casts = [
        'activa' => 'boolean',
        'sueldo' => 'float',
    ];

    /**
     * Scope para filtrar vacantes activas
     */
    public function scopeActivas($query)
    {
        return $query->where('activa', true);
    }
}
