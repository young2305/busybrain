<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableVefDepots extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vef_depots', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('usser',30);
            $table->string('methode');
            $table->biginteger('numero');
            $table->biginteger('montant');
            $table->string('reference')->unique();
            $table->boolean('statut')->default('0');
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
        Schema::dropIfExists('vef_depots');
    }
}
