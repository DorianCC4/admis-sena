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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email',45);
            // capo para la llave
            $table->unsignedBigInteger('area_id')->unique();
            $table->unsignedBigInteger('training_center_id')->unique();
            // asociar la llave
            $table->foreign('area_id')
            ->references('id')
            ->on('areas')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            // asociar la llave
            $table->foreign('training_center_id')
            ->references('id')
            ->on('training_centers')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
