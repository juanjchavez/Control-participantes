<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class evaluacion extends Model
{
    use HasFactory;
    
    protected $table='evaluaciones';
    protected $primaryKey="Cod_Evaluacion";
}
