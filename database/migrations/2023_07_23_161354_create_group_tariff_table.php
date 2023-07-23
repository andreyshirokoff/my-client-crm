<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('group_tariff', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('group_id');
            $table->unsignedBigInteger('owner_id')->nullable();
            $table->timestamp('active_to')->nullable();
            $table->unsignedBigInteger('xml_id')->nullable();
            $table->string('sign_path')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('group_tariff');
    }
};
