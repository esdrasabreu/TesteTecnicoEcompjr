<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnterprisesTable extends Migration
{

    //protected $connection = 'ecompjr';
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enterprises', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            //$table->foreignId('federacao_id')->index();
            $table->timestamps();

            //$table->unsignedBigInteger('federacao_id');
            //$table->foreign('federacao_id')->references('id')->on('federations');

            //$table->foreignId('federacao_id')->on('federations')->onDelete('cascade');

            //$table->foreign('federacao_id')->references('id')->on('federations')->onDelete('cascade');

            $table->foreignId('federacao_id')->constrained('federations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enterprises');
    }
}
