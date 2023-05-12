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
        Schema::create('computer_finders', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('type');
            $table->string('storage');
            $table->string('endurance');
            $table->string('budget');
            $table->string('peripherals')->nullable();
            $table->string('aesthetic')->nullable();
            $table->string('image');

            $table->string('processor_id');
            $table->string('cpu_cooler_id');
            $table->string('moba_id');
            $table->string('memory_id');
            $table->string('gpu_id');
            $table->string('storage_id');
            $table->string('power_supply_id');
            $table->string('case_id');
            $table->string('case_fan_id')->nullable();
            $table->string('monitor_id')->nullable();
            $table->string('mouse_id')->nullable();
            $table->string('headset_id')->nullable();
            $table->string('keyboard_id')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('computer_finders');
    }
};
