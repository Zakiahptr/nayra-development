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
        Schema::create('residences', function (Blueprint $table) {
            $table->id();
            $table->string('residence_name', 100);
            $table->text('residence_desc');
            $table->string('address', 100);
            $table->text('address_url')->nullable();
            $table->text('specification');
            $table->text('featured_image');
            $table->text('image_1')->nullable();
            $table->text('image_2')->nullable();
            $table->text('video')->nullable();
            $table->string('residence_status', 10);
            $table->string('slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('residences');
    }
};
