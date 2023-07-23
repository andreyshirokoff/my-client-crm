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
            $table->string('logo_path');
            $table->unsignedBigInteger('sms_count')->default(0);
            $table->unsignedBigInteger('emails_count')->default(0);
            $table->unsignedBigInteger('users_count')->default(2);
            $table->boolean('show_phone');
            $table->boolean('can_edit_card');
            $table->boolean('can_edit_control');
            $table->text('non_medical');
            $table->text('medical');
            $table->text('note_user');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_groups');
    }
};
