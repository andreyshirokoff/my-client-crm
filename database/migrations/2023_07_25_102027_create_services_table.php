<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('group_id');
            $table->foreign('group_id')->references('id')->on('user_groups');
            $table->boolean('is_med')->default(0);;
            $table->string('name');
            $table->longText('description')->nullable();
            $table->longText('contraindications')->nullable();
            $table->longText('indicators')->nullable();
            $table->longText('recommendation')->nullable();
            $table->unsignedBigInteger('amount')->default(1);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
