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
        Schema::create('doc_users', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doc_id')->unique();
            $table->foreign('doc_id')->references('id')->on('users')->onDelete('cascade');
            $table->string("dataContrat");
            $table->string("setor");
            $table->string("cpf");
            $table->string("rg");
            $table->string("ctps");
            $table->string("tituloEleitoral");
            $table->string("cnh");
            $table->string("cerReserv");
            $table->string("escolaridade");
            $table->string("address");
            $table->integer("numero");
            $table->string("cep");
            $table->string("bairro");
            $table->string("city");
            $table->text("dataAdd");
            $table->string("personR");
            $table->string("phone");
            $table->string("phone2");
            $table->string("complemento");
            $table->string("selected");
            $table->string("escalas");
            $table->string("prof");
            $table->string("pis");
            $table->string('orgEmissor');
            $table->string('uf');
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
        Schema::dropIfExists('doc_users');
    }
};
