<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $fillable = [
        'solicitante',
        'fecha',
        'hora_inicio',
        'hora_fin',
        'motivo',
        'espacio_id',
    ];

    public function espacio()
    {
        return $this->belongsTo(Espacio::class);
    }
    
}
