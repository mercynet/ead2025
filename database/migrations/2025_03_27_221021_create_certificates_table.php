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

        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->string('namespace');
            $table->foreignId('enrollment_id')->constrained();
            $table->string('certificate_number')->unique();
            $table->timestamp('issued_at')->index();
            $table->string('verification_code')->unique();
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificates');
    }
};
