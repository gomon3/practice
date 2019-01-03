<?php

use App\Faq;
use Illuminate\Database\Seeder;

class FaqsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Faq::truncate();

        Faq::create([
            'faq' => '¿Qué tarjetas de crédito aceptan?',
            'section_id' => 1,
            'solution_id' => 1
        ]);

        Faq::create([
            'faq' => '¿Qué métodos de pagos aceptan?',
            'section_id' => 1,
            'solution_id' => 2
        ]);
    }
}
