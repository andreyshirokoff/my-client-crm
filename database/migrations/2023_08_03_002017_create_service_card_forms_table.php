<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('service_card_forms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('group_id')
                ->default(0);
            $table->foreign('group_id')->references('id')->on('user_groups');
            $table->longText('fields');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('service_card_forms');
    }
};
