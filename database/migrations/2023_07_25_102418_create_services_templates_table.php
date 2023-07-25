<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('services_templates', function (Blueprint $table) {
            $table->id();
            $table->string('is_med');
            $table->string('name');
            $table->longText('description');
            $table->longText('contradation');
            $table->longText('indicators');
            $table->longText('recommendation');
            $table->unsignedBigInteger('amount');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services_templates');
    }
};
