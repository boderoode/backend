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
       //make a table with a foreign key to leverancier, product and make columns datum_levering, aantal and datum_eerstvolgende_levering.
        Schema::create('product_per_leverancier', function (Blueprint $table) {
            $table->id();
            $table->foreignId('leverancier_id')->constrained('leveranciers');
            $table->foreignId('product_id')->constrained('products');
            $table->date('datum_levering');
            $table->integer('aantal');
            $table->date('datum_eerstvolgende_levering');
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
