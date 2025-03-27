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
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('namespace');
            $table->string('name')->index();
            $table->string('code', 2)->unique();
            $table->string('currency_code', 3)->nullable()->index();
            $table->string('currency_symbol', 10)->nullable();
            $table->boolean('is_active')->default(true)->index();
            $table->string('domain')->unique()->nullable();
            $table->string('locale', 10)->default('en')->index();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
