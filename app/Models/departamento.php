<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departamento extends Model
{
    use HasFactory;
    
    protected $table='departamentos';
    protected $primaryKey="Cod_Departamento";
    protected $fillable = ['N_Departamento'];
}
