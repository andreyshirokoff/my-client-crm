<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('information_groups', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('group_id')->default(0);
            $table->foreign('group_id')->references('id')->on('user_groups');
            $table->enum('type', ['sms', 'email'])->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->text('text')->nullable();
            $table->boolean('is_archive')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('information_groups');
    }
};
