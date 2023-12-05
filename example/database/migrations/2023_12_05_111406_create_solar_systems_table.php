<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
// In de create_solar_systems_table migratie
public function up()
{
    Schema::create('solar_systems', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        // Voeg hier andere kolommen toe die je nodig hebt voor solar_systems
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solar_systems');
    }
};
