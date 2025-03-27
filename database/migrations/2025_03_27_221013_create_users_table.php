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
        Schema::disableForeignKeyConstraints();

        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('namespace');
            $table->string('name')->index();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->foreignId('country_id')->nullable()->constrained();
            $table->string('phone')->nullable()->index();
            $table->text('bio')->nullable();
            $table->string('avatar')->nullable();
            $table->integer('commission_rate')->nullable();
            $table->timestamp('last_login_at')->nullable()->index();
            $table->boolean('is_active')->default(true)->index();
            $table->string('remember_token')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
