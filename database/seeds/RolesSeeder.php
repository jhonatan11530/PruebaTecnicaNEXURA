<?php

use App\roles;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            array(
                'nombre' => "Desarrollador",
                'created_at' => new \Datetime(),
                'updated_at' => new \Datetime(),
            ),
            array(
                'nombre' => "Analista",
                'created_at' => new \Datetime(),
                'updated_at' => new \Datetime(),
            ),
            array(
                'nombre' => "Tester",
                'created_at' => new \Datetime(),
                'updated_at' => new \Datetime(),
            ),
            array(
                'nombre' => "Diseñador",
                'created_at' => new \Datetime(),
                'updated_at' => new \Datetime(),
            ),
            array(
                'nombre' => "Profesional PMO",
                'created_at' => new \Datetime(),
                'updated_at' => new \Datetime(),
            ),
            array(
                'nombre' => "Profesional de servicios",
                'created_at' => new \Datetime(),
                'updated_at' => new \Datetime(),
            ),
            array(
                'nombre' => "Auxiliar administrativo",
                'created_at' => new \Datetime(),
                'updated_at' => new \Datetime(),
            ),
            array(
                'nombre' => "Codirector",
                'created_at' => new \Datetime(),
                'updated_at' => new \Datetime(),
            )
        ]);
    }
}
