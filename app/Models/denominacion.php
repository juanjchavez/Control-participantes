<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class denominacion extends Model
{
    use HasFactory;
    
    protected $table='denominaciones';
    protected $primaryKey="Cod_Denominacion";
}
