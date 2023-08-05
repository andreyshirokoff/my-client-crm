<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('user_tariffs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_xml_id');
            $table->foreign('user_xml_id')->references('xml_id')->on('users');
            $table->unsignedBigInteger('tariff_xml_id');
            $table->foreign('tariff_xml_id')->references('xml_id')->on('tariffs');
            $table->dateTime('date_start');
            $table->dateTime('date_end');
            $table->boolean('is_active');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_tariffs');
    }
};
