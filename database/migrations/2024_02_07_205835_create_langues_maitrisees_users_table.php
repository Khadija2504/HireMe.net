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
        Schema::create('langues_maitrisees_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->constrained('users')->nullable();
            $table->foreignId('entreprise_id')->constrained('entreprises')->nullable();
            $table->enum('type_user',['user','entreprise']);
            $table->foreignId('langues_maitrisees_id')->constrained('langues_maitrisees');
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
        Schema::dropIfExists('langues_maitrisees_users');
    }
};
