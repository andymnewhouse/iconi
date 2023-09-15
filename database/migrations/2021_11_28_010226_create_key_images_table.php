<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('key_images', function (Blueprint $table) {
            $table->id();
            $table->string('hash')->nullable();
            $table->string('filename')->nullable();
            $table->foreignId('user_id')->nullable()->index();
            $table->json('config')->nullable();
            $table->timestamps();
        });
    }
};
