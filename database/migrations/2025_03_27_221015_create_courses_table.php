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

        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('namespace');
            $table->foreignId('instructor_id')->constrained('users');
            $table->integer('order')->default(0);
            $table->integer('access_months')->default(0);
            $table->json('title');
            $table->string('slug')->unique();
            $table->json('description')->nullable();
            $table->json('short_description')->nullable();
            $table->string('level')->default('beginner')->index();
            $table->json('pre_requisites')->nullable();
            $table->json('target_audience')->nullable();
            $table->string('thumbnail')->nullable();
            $table->text('image_cover')->nullable();
            $table->json('meta_title')->nullable();
            $table->json('meta_description')->nullable();
            $table->boolean('is_fifo')->default(true)->index();
            $table->string('status')->default('draft')->index();
            $table->timestamp('published_at')->nullable()->index();
            $table->timestamp('started_at')->nullable()->index();
            $table->timestamp('finished_at')->nullable()->index();
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
        Schema::dropIfExists('courses');
    }
};
