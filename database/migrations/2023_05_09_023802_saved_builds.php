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
        Schema::create('saved_builds', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->integer('processor_id');
            $table->integer('cpu_cooler_id');
            $table->integer('moba_id');
            $table->integer('memory_id');
            $table->integer('gpu_id');
            $table->integer('storage_id');
            $table->integer('power_supply_id');
            $table->integer('case_id');
            $table->integer('case_fan_id')->nullable();
            $table->integer('monitor_id')->nullable();
            $table->integer('mouse_id')->nullable();
            $table->integer('headset_id')->nullable();
            $table->integer('keyboard_id')->nullable();
            $table->string('category');
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('saved_builds');
    }
};
