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
            $table->string('email', 255)->unique();
            $table->string('password', 50);
            $table->string('fullname', 50);
            $table->string('phone', 10);
            $table->string('avatar_link', 255)->nullable();
            $table->string('province', 255);
            $table->string('district', 255);
            $table->string('detailed_address', 255);
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
