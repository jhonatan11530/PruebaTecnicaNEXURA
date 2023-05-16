<?php

use App\empleado;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empleado')->insert([
            array(
                'nombre' => 'Pedro Pérez',
                'email' => 'pperez@example.co',
                'sexo' => 'M',
                'area_id' => 5,
                'boletin' => 1,
                'descripcion' => 'Hola mundo',
                'created_at' => new \Datetime(),
                'updated_at' => new \Datetime(),
            ),
            array(
                'nombre' => 'Amalia Bayona',
                'email' => 'abayona@example.co',
                'sexo' => 'F',
                'area_id' => 8,
                'boletin' => 0,
                'descripcion' => 'Para contactar a Amalia Bayona, puede escribir al correo electrónico abayona@example.co',
                'created_at' => new \Datetime(),
                'updated_at' => new \Datetime(),
            )
        ]);
    }
}
