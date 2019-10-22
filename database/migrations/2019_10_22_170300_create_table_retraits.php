<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableRetraits extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retraits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->biginteger('id_utilisateur')->unsigned();
            $table->string('nom',25);
            $table->string('methode');
            $table->biginteger('numero');
            $table->biginteger('montant');
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
        Schema::dropIfExists('retraits');
    }
}
