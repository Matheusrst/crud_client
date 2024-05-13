<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     *envio das migrations relacionadas da tabela login para a tabela cliets para o banco de dados.
     */
    public function up(): void
    {
        Schema::table('client', function (Blueprint $table) {
            $table->foreignId('login_id')->after('name')->constrained('login');
            $table->string('cliente_fk')->after('login_id')->constrained('login')->truncate();
        });
    }

    /**
     * devolução das migrations.
     */
    public function down(): void
    {
        Schema::table('client', function (Blueprint $table) {
            //
        });
    }
};
