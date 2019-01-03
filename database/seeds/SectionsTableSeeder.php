<?php

use App\Section;
use Illuminate\Database\Seeder;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Section::truncate();

        Section::create([
            'nombre' => 'Métodos de Pago',
            'icon_id' => 1
        ]);
        Section::create([
            'nombre' => 'Inicio de sesión y seguridad',
            'icon_id' => 2
        ]);
        Section::create([
            'nombre' => 'Cancelaciones',
            'icon_id' => 3
        ]);
    }
}
