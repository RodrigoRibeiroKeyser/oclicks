<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_docs', function (Blueprint $table) {
            

            $table->bigIncrements('user_id')->unsigned();
            $table->string('avatar')->nullable();
            $table->string('cpf')->nullable();
            $table->string('rg')->nullable();
            $table->string('ctps')->nullable();            
            $table->string('t_eleitor')->nullable();
            $table->string('pis_pasep')->nullable();
            $table->string('c_reservista')->nullable();
            $table->string('cnh')->nullable();
            $table->string('c_nascimento_casamento')->nullable();
            $table->string('instrucao')->nullable();
            $table->string('n_filhos')->nullable();
            $table->string('filhos_menores')->nullable();

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
        Schema::dropIfExists('profile_docs');
    }
};
