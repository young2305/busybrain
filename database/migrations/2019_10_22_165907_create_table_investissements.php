<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableInvestissements extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investissements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->biginteger('id_utilisateur')->unsigned();
            $table->biginteger('montant');
            $table->string('nom',25);
            $table->string('ticket');
            $table->string('etat');
            $table->boolean('statut')->default('0');
            $table->dateTime('date_fin')->nullable();
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
        Schema::dropIfExists('investissements');
    }
}
