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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            // 🔥 Rol va shifokorlik holati
            $table->string('role')->default('patient'); // 'admin', 'doctor', 'patient'
            $table->boolean('is_doctor')->default(false);

            // 🔥 Shifokorga oid ma’lumotlar
            $table->string('specialty')->nullable();    // soha
            $table->string('workplace')->nullable();    // ish joyi
            $table->integer('experience')->nullable();  // tajriba (yil)
            $table->string('image')->nullable();        // rasm
            $table->json('social_links')->nullable();   // ijtimoiy tarmoqlar (array)

            $table->rememberToken();
            $table->timestamps();
        });

        // Parolni tiklash uchun jadval
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        // Sessiyalar jadvali
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('users');
    }
};
