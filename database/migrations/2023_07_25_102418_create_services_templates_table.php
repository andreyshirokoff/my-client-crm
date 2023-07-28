<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('services_templates', function (Blueprint $table) {
            $table->id();
            $table->string('is_med')->default(0);
            $table->string('name');
            $table->longText('description')->nullable();
            $table->longText('description_text')->nullable();
            $table->longText('contraindications')->nullable();
            $table->longText('indicators')->nullable();
            $table->longText('recommendation')->nullable();
            $table->unsignedBigInteger('amount')->default();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services_templates');
    }
};
