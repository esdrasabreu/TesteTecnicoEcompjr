<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFederationsTable extends Migration
{
    //protected $connection = 'ecompjr';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('federations', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            //$table->unsignedBigInteger('estado_id');
            $table->timestamps();

            //$table->unsignedBigInteger('states_id');
            //$table->foreign('states_id')->references('id')->on('states');

            //$table->unsignedBigInteger('estado_id');
            //$table->foreignId('estado_id')->constrained('states');

            $table->foreignId('estado_id')->on('states')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('federations');
    }
}
