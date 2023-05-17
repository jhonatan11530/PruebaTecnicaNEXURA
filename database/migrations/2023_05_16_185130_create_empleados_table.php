<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('empleado', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('email');
            $table->char('sexo', 1);
            $table->unsignedBigInteger('area_id');
            $table->integer('boletin')->nullable();
            $table->text('descripcion');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();

        Schema::dropIfExists('empleados');

        Schema::enableForeignKeyConstraints();
    }
}
