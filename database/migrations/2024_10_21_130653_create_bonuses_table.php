<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('bonuses', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('description');
            $table->decimal('price', 12,2);
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('bonuses');
    }
};
