<?php

use App\Solution;
use Illuminate\Database\Seeder;

class SolutionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Solution::truncate();

        Solution::create([
            'information' => 'Aceptamos VISA, American Express y MasterCard. Asimismo, aceptamos tarjetas de débito si las compras se realizan en <a href="#">oficinas de ventas</a> o en nuestra página web, siempre que el banco emisor acepte su uso para este fin.'
        ]);

        Solution::create([
            'information' => 'A través de nuestro sistema web aceptamos pagos con tarjeta de débito o crédito, así mismo también se aceptan pagos en efectivo a través de Oxxo y cadenas comerciales como farmacias del ahorro, bodega ahorrera, etc.'
        ]);
    }
}
