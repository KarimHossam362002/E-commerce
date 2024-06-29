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
        Schema::create('product_color_size', function (Blueprint $table) {
            $table->id();
            $table->foreignId('color_id')
            ->nullable()
            ->constrained('product_colors')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('size_id')
            ->nullable()
            ->constrained('product_sizes')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->integer("quantity");
            $table->decimal("price_two",10,2)->nullable();
            $table->decimal("discount_two",10,2)->nullable();
            $table->boolean("is_stock")->nullable();
            $table->integer("status")->default(1);
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_color_size');
    }
};
