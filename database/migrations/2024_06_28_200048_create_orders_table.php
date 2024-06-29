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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
            ->nullable()
            ->constrained('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            
            $table->integer("status")->default(0);
            $table->string("payment_method");
            $table->string("payment_status");
            $table->string("payment_id");
            $table->string("total_price");
            $table->string("address");
            $table->string("phone");
            $table->string("email");
            $table->string("name");
            $table->string("surname");
            $table->string("city");
            $table->string("postal_code");
            $table->string("country");
            $table->string("shipping_price");
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
