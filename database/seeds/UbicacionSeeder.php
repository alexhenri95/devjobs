<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UbicacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ubicaciones')->insert([
        	'nombre' => 'Azuay',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);
        DB::table('ubicaciones')->insert([
        	'nombre' => 'Bolivar',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);
        DB::table('ubicaciones')->insert([
        	'nombre' => 'Cañar',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);
        DB::table('ubicaciones')->insert([
        	'nombre' => 'Carchi',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);
        DB::table('ubicaciones')->insert([
        	'nombre' => 'Chimborazo',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);
        DB::table('ubicaciones')->insert([
        	'nombre' => 'Cotopaxi',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);
        DB::table('ubicaciones')->insert([
        	'nombre' => 'El Oro',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);
        DB::table('ubicaciones')->insert([
        	'nombre' => 'Esmeraldas',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);
        DB::table('ubicaciones')->insert([
        	'nombre' => 'Galápagos',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);
        DB::table('ubicaciones')->insert([
        	'nombre' => 'Guayas',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);
        DB::table('ubicaciones')->insert([
        	'nombre' => 'Imbabura',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);
        DB::table('ubicaciones')->insert([
        	'nombre' => 'Loja',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);
        DB::table('ubicaciones')->insert([
        	'nombre' => 'Los Ríos',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);
        DB::table('ubicaciones')->insert([
        	'nombre' => 'Manabí',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);
        DB::table('ubicaciones')->insert([
        	'nombre' => 'Morona Santiago',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);
        DB::table('ubicaciones')->insert([
        	'nombre' => 'Napo',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);
        DB::table('ubicaciones')->insert([
        	'nombre' => 'Orellana',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);
        DB::table('ubicaciones')->insert([
        	'nombre' => 'Pastaza',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);
        DB::table('ubicaciones')->insert([
        	'nombre' => 'Pichincha',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);
        DB::table('ubicaciones')->insert([
        	'nombre' => 'Santa Elena',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);
        DB::table('ubicaciones')->insert([
        	'nombre' => 'Santo Domingo de Tsáchilas',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);
        DB::table('ubicaciones')->insert([
        	'nombre' => 'Sucumbíos',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);
        DB::table('ubicaciones')->insert([
        	'nombre' => 'Tungurahua',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);
        DB::table('ubicaciones')->insert([
        	'nombre' => 'Zamora Chinchipe',
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now(),
        ]);
    }
}
