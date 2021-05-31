<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SueldoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sueldos')->insert([
        	'nombre' => 'No Mostrar',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);
        DB::table('sueldos')->insert([
        	'nombre' => 'Sueldo básico: $400',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);
        DB::table('sueldos')->insert([
        	'nombre' => '$400 - $500',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);
        DB::table('sueldos')->insert([
        	'nombre' => '$500 - $600',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);
        DB::table('sueldos')->insert([
        	'nombre' => '$700 - $800',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);
        DB::table('sueldos')->insert([
        	'nombre' => '$800 - $1000',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);
        DB::table('sueldos')->insert([
        	'nombre' => '$1000 - $1200',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);
        DB::table('sueldos')->insert([
        	'nombre' => '$1200 - $1500',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);
        DB::table('sueldos')->insert([
        	'nombre' => '$1500 - $2000',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);
    }
}
