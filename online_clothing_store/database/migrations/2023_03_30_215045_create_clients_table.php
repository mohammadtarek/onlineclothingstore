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
        Schema::create('clients', function (Blueprint $table) {
            $table->string('c_email',50)->primary();
            $table->string('c_firstname',50);
            $table->string('c_lasttname',50);
            $table->string('c_address',50);
            $table->bigInteger('c_phone');
            $table->string('c_gender',50);
            $table->date('c_dob');
            $table->string('c_password',50);
            $table->boolean('c_isblocked');
            $table->string('a_adminadded',50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
