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
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();

            $table->string('primary_color')->nullable();
            $table->string('secondary_color')->nullable();
            $table->string('logo_light')->nullable();
            $table->string('logo_dark')->nullable();

            $table->text('mission')->nullable();
            $table->text('vision')->nullable();
            $table->text('values')->nullable();

            $table->string('sector')->nullable();
            $table->text('target_audience')->nullable();
            $table->text('differentials')->nullable();

            $table->text('communication_style')->nullable();
            $table->text('brand_voice')->nullable();
            $table->text('common_scenarios')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brands');
    }
};
