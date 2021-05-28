<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePapelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('papels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('descricao');
            $table->timestamps();
        });

        Schema::create('papel_permissao', function (Blueprint $table) {
            $table->unsignedBigInteger('permissao_id');
            $table->unsignedBigInteger('papel_id');

            $table->foreign('permissao_id')->references('id')->on('permissaos')->onDelete('cascade');

            $table->foreign('papel_id')->references('id')->on('papels')->onDelete('cascade');
        });

        Schema::create('papel_user', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('papel_id');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->foreign('papel_id')->references('id')->on('papels')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('papels');
    }
}
