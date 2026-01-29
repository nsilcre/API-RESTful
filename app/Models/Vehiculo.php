<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    protected $table = 'vehiculos';

    protected $primaryKey = 'matricula';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = [
        'matricula',
        'marca',
        'modelo',
        'anio_fabricacion',
        'disponibilidad',
        'combustible',
    ];
}
