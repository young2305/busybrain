<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableDepots extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('depots', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->biginteger('id_utilisateur')->unsigned();
            $table->biginteger('montant');
            $table->string('nom',30);
            $table->string('reference');
            $table->biginteger('numero');
            $table->string('methode');
            $table->string('ticket');
            $table->string('etat');
            $table->boolean('statut')->default('0');
            $table->foreign('id_utilisateur')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('depots');
    }
}
