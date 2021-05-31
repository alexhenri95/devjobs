<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('categorias')->insert([
            'nombre' => 'Base de Datos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Desarrollo Web',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Gestor de Proyectos',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Programación',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Redes y Telecomunicaciones',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Seguridad Informática',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Soporte Técnico',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'TI',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // DB::table('categorias')->insert([
        //     'nombre' => 'Abastecimiento y Logística',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
        // DB::table('categorias')->insert([
        //     'nombre' => 'Administración, Contabilidad y Finanzas',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
        // DB::table('categorias')->insert([
        //     'nombre' => 'Aduana y Comercio Exterior',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
        // DB::table('categorias')->insert([
        //     'nombre' => 'Atención al cliente, Call Center y Telemarketing',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
        // DB::table('categorias')->insert([
        //     'nombre' => 'Comercial, Ventas y Negocios',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
        // DB::table('categorias')->insert([
        //     'nombre' => 'Comunicación Social',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
        // DB::table('categorias')->insert([
        //     'nombre' => 'Comunicación, Relaciones Institucionales y Públicas',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
        // DB::table('categorias')->insert([
        //     'nombre' => 'Diseño',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
        // DB::table('categorias')->insert([
        //     'nombre' => 'Educación, Docencia e Investigación',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
        // DB::table('categorias')->insert([
        //     'nombre' => 'Enfermería',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
        // DB::table('categorias')->insert([
        //     'nombre' => 'Gastronomía y Turismo',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
        // DB::table('categorias')->insert([
        //     'nombre' => 'Gerencia y Dirección General',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
        // DB::table('categorias')->insert([
        //     'nombre' => 'Ingeniería civíl y Construcción',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
        // DB::table('categorias')->insert([
        //     'nombre' => 'Ingenierías',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
        // DB::table('categorias')->insert([
        //     'nombre' => 'Legales',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
        // DB::table('categorias')->insert([
        //     'nombre' => 'Marketing y Publicidad',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
        // DB::table('categorias')->insert([
        //     'nombre' => 'Minería, Petróleo y Gas',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
        // DB::table('categorias')->insert([
        //     'nombre' => 'Oficios y Otros',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
        // DB::table('categorias')->insert([
        //     'nombre' => 'Producción y Manufactura',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
        // DB::table('categorias')->insert([
        //     'nombre' => 'Recursos Humanos y Capacitación',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
        // DB::table('categorias')->insert([
        //     'nombre' => 'Salud, Medicina y Farmacia',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
        // DB::table('categorias')->insert([
        //     'nombre' => 'Secretarias y Recepción',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
        // DB::table('categorias')->insert([
        //     'nombre' => 'Seguros',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
        // DB::table('categorias')->insert([
        //     'nombre' => 'Sociología /Trabajo Social',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
        // DB::table('categorias')->insert([
        //     'nombre' => 'Tecnología, Sistemas y Telecomunicaciones',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
    }
}
