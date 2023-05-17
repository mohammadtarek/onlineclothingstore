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
            $table->string('p_title',50)->primary();
            $table->string('p_desc',50);
            $table->bigInteger('p_price');
            $table->string('p_size',50);
            $table->bigInteger('p_quantity');
            $table->string('p_color',50);
            $table->string('p_photo',50);
            $table->string('client_solid',50)->nullable();
            $table->string('supplier_solid',50)->nullable();
            $table->timestamps();
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
