<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->biginteger('id_pays')->unsigned();
            $table->string('nom',25);
            $table->string('prenom',35);
            $table->string('date_nais')->nullable();
            $table->string('email')->unique();
            $table->string('vef_email')->nullable();
            $table->string('pays',20);
            $table->string('ville',20);
            $table->string('address',150)->nullable();
            $table->biginteger('numero');
            $table->string('usser',15)->unique();
            $table->string('password');
            $table->string('passgener')->nullable();
            $table->string('token')->nullable();
            $table->boolean('isadmin')->default('0');
            $table->biginteger('pourcentage')->default('20');
            $table->integer('solde')->default('0');
            $table->biginteger('maxmontant')->default('5000');
            $table->string('avatar')->default('avatars/default.jpg');
            //$table->foreign('id_pays')->references('id')->on('pays')->onDelete('cascade');
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
        Schema::dropIfExists('users');
    }
}
