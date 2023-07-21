<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('user_groups', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->unsignedBigInteger('sms_count')->default(0);
            $table->unsignedBigInteger('emails_count')->default(0);
            $table->unsignedBigInteger('users_count')->default(2);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_groups');
    }
};
