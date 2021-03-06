<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professors', function (Blueprint $table) 
        {
            $table->id();
            $table->string('nomeProf',100);
            $table->string('emailProf',100);
            $table->string('telefoneProf',30);
            $table->string('nRegistro',10);
            $table->string('titulacao');
            $table->double('salario',15);
            $table->double('valorHrAulaProf',10);
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
        Schema::dropIfExists('professors');
    }
}
