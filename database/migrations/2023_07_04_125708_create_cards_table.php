<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('set');
            $table->unsignedInteger('number');
            $table->string('type');
			$table->string('name');
            $table->unsignedTinyInteger('cost');
            $table->unsignedTinyInteger('power');
            $table->jsonb('colors');
			$table->jsonb('keywords');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cards');
    }
};
