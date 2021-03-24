<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\objetos;

class objetosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        objetos::create([
            'codigo' => 'Inserte código que se pondra este lugar.',
            'descripcion'=> 'Descripción del código',
            'precio' => '500',
            'contenido' => '6',
        ]);
    }
}
