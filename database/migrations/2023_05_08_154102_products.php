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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            // Default Fields
            $table->string('brand'); // Monitor, Keyboard, Headset, Mouse
            $table->string('name'); // Monitor, Keyboard, Headset, Mouse
            $table->integer('quantity'); // Monitor, Keyboard, Headset, Mouse
            $table->integer('price'); // Monitor, Keyboard, Headset, Mouse
            $table->string('desc'); // Monitor, Keyboard, Headset, Mouse
            $table->string('product_image'); // Monitor, Keyboard, Headset, Mouse
            $table->string('category');
            // Processor
            $table->string('clock_frequency')->nullable();
            $table->string('cores')->nullable();
            $table->string('socket_type')->nullable(); // CPU Cooler, Case
            $table->string('thread')->nullable();
            // CPU Cooler
            $table->string('fan_size')->nullable(); // Case Fan
            $table->string('fan_speed')->nullable(); // Case Fan
            $table->string('air_flow')->nullable(); // Case Fan
            // MOBA
            $table->string('form_factor')->nullable(); // Power Supply, Case
            $table->string('cpu_socket')->nullable();
            $table->string('ram_slots')->nullable();
            $table->string('multiple_gpu')->nullable();
            // Memory
            $table->string('memory_size')->nullable(); // GPU
            $table->string('ram_type')->nullable();
            $table->string('memory_speed')->nullable();
            $table->string('physical_size')->nullable(); // Case, Case Fan
            // Graphics Card
            $table->string('memory_type')->nullable();
            $table->string('memory_clock')->nullable();
            $table->string('gpu_clock')->nullable();
            // Storage
            $table->string('storage_type')->nullable();
            $table->string('storage_capacity')->nullable();
            $table->string('transfer_speed')->nullable();
            $table->string('cache_speed')->nullable();
            // Power Supply
            $table->string('wattage')->nullable();
            $table->string('efficiency_rate')->nullable();
            $table->string('modularity')->nullable();
            // Case
            $table->string('case_size')->nullable();
            // Extra Fields
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
