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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->string('s_email',50)->primary();
            $table->string('s_firstname',50);
            $table->string('s_lasttname',50);
            $table->string('s_address',50);
            $table->bigInteger('s_phone');
            $table->string('s_gender',50);
            $table->date('s_dob');
            $table->string('s_password',50);
            $table->boolean('s_isblocked');
            $table->string('s_adminadded',50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
