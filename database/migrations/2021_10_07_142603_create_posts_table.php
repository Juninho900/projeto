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
            // $table->string('nomeProf',100);
            // $table->string('emailProf',100);
            // $table->string('telefoneProf',30);
            // $table->string('nRegistro',10);
            // $table->string('titulacao');
            // $table->string('tituloAula',100);
            // $table->string('curso');
            // $table->string('profAula',100);
            // $table->date('dtAulaProf');
            // $table->double('qtdHrsAula');
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
        Schema::dropIfExists('post');
    }
}
