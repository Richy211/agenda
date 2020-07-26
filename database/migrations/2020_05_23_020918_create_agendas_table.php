<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombres',50);
            $table->string('apellidos',50);
            $table->string('telefono',20);
            $table->string('celular',20);
            $table->char('sexo',9);
            $table->string('email',50);
            $table->string('posicion',100);
            $table->string('departamento',100);
            $table->decimal('salario',10,2);
            $table->date('fechadenacimiento');
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
        Schema::dropIfExists('agendas');
    }
}
