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
        Schema::create('car_parts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_id')->references('id')->on('cars')->onDelete('cascade');
            $table->foreignId('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->decimal('price', 10, 2);
            $table->decimal('old_price', 10, 2);
            $table->string('name');
            $table->text('description');
            $table->string('status');
            $table->string('code');
            $table->integer('count');
            $table->string('warranty');
            $table->decimal('sale_price', 10, 2);
            $table->decimal('sale_amount', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('part_stock');
    }
};
