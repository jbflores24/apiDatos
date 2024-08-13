<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'numero_de_control',
        'nombre',
        'domicilio',
        'tiposangre',
        'nss',
        'contactoemergencia',
        'telefonocontactoemergencia',
    ];
}
