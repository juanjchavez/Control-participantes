<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class departamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departamentos=[ 'Boaco', 'Carazo', 'Chinandega', 'Chontales', 'Estelí', 'Granada', 'Jinotega', 'León', 'Madriz', 'Managua', 'Masaya', 'Matagalpa', 'Nueva Segovia', 'Rivas', 'Río San Juan', 'Región Autónoma del Atlántico Norte', 'Región Autónoma del Atlántico Sur'];

        foreach($departamentos as $d){
            DB::table('departamentos')->insert([
                'N_Departamento' => $d,
            ]);
        }
    }
}
