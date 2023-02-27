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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company');
            $table->string('from', 100);
            $table->string('to', 100);
            $table->string('departure', 8);
            $table->string('arrive', 8);
            $table->string('train_code', 10);
            $table->tinyInteger('carriages')->unsigned()->nullable();
            $table->boolean('is_in_time')->unsigned()->default(1);
            $table->boolean('is_cancelled')->unsigned()->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
