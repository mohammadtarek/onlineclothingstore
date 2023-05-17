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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstname',50);
            $table->string('lasttname',50);
            $table->string('email',50)->unique();
            $table->string('password',250);
            $table->string('address',50);
            $table->bigInteger('phone');
            $table->string('gender',50);
            $table->date('dob');
            $table->boolean('isblocked');
            $table->string('a_adminadded',50)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->enum('role',['client','supplier','admin']);
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
