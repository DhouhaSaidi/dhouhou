<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('avocats', function (Blueprint $table) {
            $table->id();
            $table->num_immatricule();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('adresse');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('num_phone');
            $table->string('id_doc');
            $table->string('diplome_doc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avocats');
    }
};
