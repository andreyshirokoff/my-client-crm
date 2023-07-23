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
            $table->unsignedBigInteger('xml_id')->nullable();
            $table->string('fullname')->nullable();
            $table->string('avatar')->nullable();
            $table->string('password');
            $table->string('email')->unique();
            $table->string('phone')->unique();

            $table->boolean('is_main')->default(false);

            $table->enum('role', ['user', 'administrator', 'owner'])->default('user');
            $table->enum('status', ['checked', 'active', 'ban'])->default('active');
            $table->unsignedBigInteger('theme_id')->default(1);

            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
