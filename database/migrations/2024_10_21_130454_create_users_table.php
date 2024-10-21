<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('surname');
            $table->string('name');
            $table->string('patronymic')->nullable();
            $table->string('login')->unique();
            $table->string('password');
            $table->string('token')->nullable()->unique();
            $table->foreignId('role_id')->constrained();   //роли
            $table->foreignId('penalty_id')->constrained();  //штрафы
            $table->foreignId('status_id')->constrained();  //статусы
            $table->foreignId('shift_id')->constrained();  //смены
            $table->foreignId('contiguous_id')->constrained();  //смежная таблица
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
