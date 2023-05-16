<?php

use App\areas;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AreasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('areas')->insert([
            array(
                'nombre' => "Administrativa y Financiera",
                'created_at' => new \Datetime(),
                'updated_at' => new \Datetime(),
            ),
            array(
                'nombre' => "Ingeniería",
                'created_at' => new \Datetime(),
                'updated_at' => new \Datetime(),
            ),
            array(
                'nombre' => "Desarrollo de Negocio",
                'created_at' => new \Datetime(),
                'updated_at' => new \Datetime(),
            ),
            array(
                'nombre' => "Proyectos",
                'created_at' => new \Datetime(),
                'updated_at' => new \Datetime(),
            ),
            array(
                'nombre' => "Servicios",
                'created_at' => new \Datetime(),
                'updated_at' => new \Datetime(),
            ),
            array(
                'nombre' => "Calidad",
                'created_at' => new \Datetime(),
                'updated_at' => new \Datetime(),
            )
        ]);
    }
}
