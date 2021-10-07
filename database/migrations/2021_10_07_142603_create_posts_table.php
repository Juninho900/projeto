<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 100);
            $table->string('email', 100);
            $table->string('telefone', 30);
            $table->date('dtNasc');
            $table->boolean('ativo');
            $table->string('ra',10);
            $table->string('nomeProf', 100);
            $table->string('emailProf', 100);
            $table->string('telefoneProf', 30);
            $table->string('numReg', 30);
            $table->string('titulacao', 30);
            $table->string('tituloAula', 100);
            $table->string('curso', 50);
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
        Schema::dropIfExists('posts');
    }
}
