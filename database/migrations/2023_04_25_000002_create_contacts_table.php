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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('straat');
            $table->string('huis_nummer');
            $table->string('postcode');
            $table->string('stad');
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
