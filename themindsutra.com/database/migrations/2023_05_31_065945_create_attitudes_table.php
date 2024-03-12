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
        Schema::create('attitudes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('participant_id');
            $table->string('assessment');
            $table->string('passive');
            $table->string('aggresive');
            $table->string('manipulation');
            $table->string('harmonious');
            $table->timestamps();
            $table->foreign('participant_id')->references('id')->on('participants')->onDelete('cascade')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attitudes');
    }
};
