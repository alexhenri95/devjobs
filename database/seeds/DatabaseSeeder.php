<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Storage::deleteDirectory('vacantes');
        Storage::makeDirectory('vacantes');
        

        $this->call(UserSeeder::class);
        $this->call(CategoriaSeeder::class);
        $this->call(ExperienciaSeeder::class);
        $this->call(UbicacionSeeder::class);
        $this->call(SueldoSeeder::class);
        // \App\Vacante::factory(10)->create();
        $this->call(VacanteSeeder::class);

    }
}
