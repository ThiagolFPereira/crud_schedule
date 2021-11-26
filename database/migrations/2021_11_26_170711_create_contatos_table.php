<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contatos', function (Blueprint $table) {
            $table->integer('id', true, true);
            $table->string('name', 255);
            $table->string('mail', 160)->nullable();
            $table->string('address', 255);
            $table->integer('number');
            $table->string('neighborhood', 160);
            $table->string('city', 50);
            $table->string('state', 30);
            $table->integer('zip');
            $table->integer('phone');
            $table->string('avatar', 200)->nullable();
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
        Schema::dropIfExists('contatos');
    }
}
