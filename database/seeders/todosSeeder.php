<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class todosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\todo::factory(10)->create();
    }
}
