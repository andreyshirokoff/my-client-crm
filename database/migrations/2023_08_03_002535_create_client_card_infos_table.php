<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('client_card_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('group_id')
                ->default(0);
            $table->foreign('group_id')->references('id')->on('user_groups');
            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->longText('fields');
            $table->boolean('is_active');
            $table->unsignedBigInteger('form_id');
            $table->foreign('form_id')->references('id')->on('service_card_forms');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('client_card_infos');
    }
};
