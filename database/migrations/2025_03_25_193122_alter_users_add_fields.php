<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            // Para multi-tenancy - relacionamento com país
            $table->foreignId('country_id')->nullable()->after('email')
                ->constrained('countries')
                ->nullOnDelete();

            // Campos adicionais para perfil
            $table->string('first_name')->nullable()->after('name');
            $table->string('last_name')->nullable()->after('first_name');
            $table->string('phone')->nullable()->after('email');
            $table->text('bio')->nullable();
            $table->string('avatar')->nullable();

            // Se for instrutor
            $table->decimal('commission_rate', 5, 2)->nullable(); // Ex: 30.00 para 30%

            // Campos para status da conta
            $table->timestamp('last_login_at')->nullable();
            $table->boolean('is_active')->default(true);
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropConstrainedForeignId('country_id');
            $table->dropColumn([
                'first_name',
                'last_name',
                'phone',
                'bio',
                'avatar',
                'commission_rate',
                'last_login_at',
                'is_active'
            ]);
        });
    }
};
