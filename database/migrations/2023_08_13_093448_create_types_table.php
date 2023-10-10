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
        Schema::create('types', function (Blueprint $table) {
            $table->id();
            $table->foreignId('residence_id')
                ->constrained()
                ->onDelete('cascade');
            $table->string('type_name', 50);
            $table->integer('price');
            $table->integer('price_month')->nullable();;
            $table->integer('bedroom');
            $table->integer('bathroom');
            $table->integer('floor');
            $table->integer('land_area');
            $table->integer('building_area');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('types');
    }
};
