<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('client_services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->bigInteger('service_id');
            $table->foreign('service_id')->references('id')->on('services');
            $table->bigInteger('note_id')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('client_services');
    }
};
