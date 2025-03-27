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

        Schema::create('lesson_progress', function (Blueprint $table) {
            $table->id();
            $table->string('namespace');
            $table->foreignId('enrollment_id')->constrained();
            $table->foreignId('lesson_id')->constrained();
            $table->integer('progress_percentage')->default(0);
            $table->string('status')->default('not_started')->index();
            $table->timestamp('started_at')->nullable();
            $table->timestamp('completed_at')->nullable()->index();
            $table->unique(['enrollment_id', 'lesson_id']);
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lesson_progress');
    }
};
