<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('alumnos')->insert(
            [
                'numero_de_control' => '201020001',
                'nombre' => 'Juan Pérez Torres',
                'domicilio'=> 'Conocido',
                'tiposangre' => 'O rh +',
                'nss' => '224565',
                'contactoemergencia' => 'Mario Pérez Martínez',
                'telefonocontactoemergencia' => '1234567890',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );

        DB::table('alumnos')->insert(
            [
                'numero_de_control' => '201020002',
                'nombre' => 'Juana Hernández González',
                'domicilio'=> 'Constancia 203, Barrio Nuevo, Salina Cruz',
                'tiposangre' => 'A rh +',
                'nss' => '224566',
                'contactoemergencia' => 'Teodoro Facio Perez',
                'telefonocontactoemergencia' => '1234567890',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );

        DB::table('alumnos')->insert(
            [
                'numero_de_control' => '201020003',
                'nombre' => 'PEdro Sáncez Gonzalez',
                'domicilio'=> 'Tehuantepec',
                'tiposangre' => 'O +',
                'nss' => '224567',
                'contactoemergencia' => 'Rutila García',
                'telefonocontactoemergencia' => '1234567890',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );

        DB::table('alumnos')->insert(
            [
                'numero_de_control' => '201020004',
                'nombre' => 'Alfreso Sosa Salinas',
                'domicilio'=> 'Conocido',
                'tiposangre' => 'AB rh +',
                'nss' => '224568',
                'contactoemergencia' => 'MAria Jimenez Ponce',
                'telefonocontactoemergencia' => '1234567890',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );
    }
}
