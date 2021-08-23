<?php

use App\Vacante;
use Illuminate\Database\Seeder;

class VacanteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Vacante::class, 20)->create();
    }
}
