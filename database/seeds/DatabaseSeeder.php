<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(IconsTableSeeder::class);
        $this->call(SectionsTableSeeder::class);
        $this->call(SolutionsTableSeeder::class);
        $this->call(FaqsTableSeeder::class);
    }
}
