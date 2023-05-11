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
        Schema::create('build_units', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->integer('processor_id');
            $table->string('processor_image');
            $table->integer('cpu_cooler_id')->nullable();
            $table->string('cpu_cooler_image')->nullable();
            $table->integer('moba_id')->nullable();
            $table->string('moba_image')->nullable();
            $table->integer('memory_id')->nullable();
            $table->string('memory_image')->nullable();
            $table->integer('gpu_id')->nullable();
            $table->string('gpu_image')->nullable();
            $table->integer('storage_id')->nullable();
            $table->string('storage_image')->nullable();
            $table->integer('power_supply_id')->nullable();
            $table->string('power_supply_image')->nullable();
            $table->integer('case_id')->nullable();
            $table->string('case_image')->nullable();
            $table->integer('case_fan_id')->nullable();
            $table->string('case_fan_image')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('build_units');
    }
};
