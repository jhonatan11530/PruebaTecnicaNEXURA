<?php

use App\empleado_rol;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpleadoRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empleado_rol')->insert([
            array(
                'empleado_id' => 3,
                'rol_id' => 4,
                'created_at' => new \Datetime(),
                'updated_at' => new \Datetime(),
            ),
            array(
                'empleado_id' => 3,
                'rol_id' => 7,
                'created_at' => new \Datetime(),
                'updated_at' => new \Datetime(),
            ),
            array(
                'empleado_id' => 3,
                'rol_id' => 2,
                'created_at' => new \Datetime(),
                'updated_at' => new \Datetime(),
            ),
            array(
                'empleado_id' => 4,
                'rol_id' => 1,
                'created_at' => new \Datetime(),
                'updated_at' => new \Datetime(),
            ),
            array(
                'empleado_id' => 4,
                'rol_id' => 2,
                'created_at' => new \Datetime(),
                'updated_at' => new \Datetime(),
            )
        ]);
    }
}
