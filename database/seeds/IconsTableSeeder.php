<?php

use App\Icon;
use Illuminate\Database\Seeder;

class IconsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Icon::truncate();

        Icon::create([
            'data' => 'si-glyph-atm-card'
        ]);
        Icon::create([
            'data' => 'si-glyph-lock'
        ]);
        Icon::create([
            'data' => 'si-glyph-deny'
        ]);
        Icon::create([
            'data' => 'si-glyph-camera'
        ]);
        Icon::create([
            'data' => 'si-glyph-floppy-disk'
        ]);
        Icon::create([
            'data' => 'si-glyph-paypal'
        ]);
        Icon::create([
            'data' => 'si-glyph-tag-price'
        ]);
        Icon::create([
            'data' => 'si-glyph-wallet'
        ]);
        Icon::create([
            'data' => 'si-glyph-weight-kilograms'
        ]);
        Icon::create([
            'data' => 'si-glyph-window'
        ]);
        
    }
}
