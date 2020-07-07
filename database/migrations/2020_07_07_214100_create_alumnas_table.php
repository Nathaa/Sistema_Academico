<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 120);
            $table->date('fecha_nacimiento');
            $table->integer('edad');
            $table->string('direccion', 254);
            $table->string('Encargado', 100);
            $table->integer('telefono_emergencia');
            $table->string('padecimientos', 254);
            $table->string('enfermedades', 254);
            $table->string('nombre_padre', 100);
            $table->string('profesion_padre', 60);
            $table->integer('telefono_padre');
            $table->string('nombre_madre', 100);
            $table->string('profesion_madre', 60);
            $table->integer('telefono_madre');
            $table->date('fecha_creacion');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnas');
    }
}
