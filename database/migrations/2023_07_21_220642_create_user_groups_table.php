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
            $table->string('logo_path')->nullable();
            $table->text('footer')->nullable();
            $table->unsignedBigInteger('sms_count')->default(0);
            $table->unsignedBigInteger('emails_count')->default(0);
            $table->unsignedBigInteger('users_count')->default(2);
            $table->boolean('show_phone')->default(1);
            $table->boolean('can_edit_card')->default(0);
            $table->boolean('can_edit_control')->default(0);
            $table->boolean('can_remove_signed_docs')->default(0);
            $table->text('non_medical')->nullable();
            $table->text('medical')->nullable();
            $table->text('note_user')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_groups');
    }
};
