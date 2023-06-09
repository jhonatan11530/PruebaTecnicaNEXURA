<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AreasSeeder::class);
        $this->call(EmpleadoRolSeeder::class);
        $this->call(EmpleadoSeeder::class);
        $this->call(RolesSeeder::class);
    }
}
