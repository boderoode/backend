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
       //make a table with naam, contactpersoon, leveranciernummer and mobiel
        Schema::create('leveranciers', function (Blueprint $table) {
            $table->id();
            $table->string('leverancier_naam');
            $table->string('contact_persoon');
            $table->string('leverancier_nummer');
            $table->string('mobiel');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_access_tokens');
    }
};
