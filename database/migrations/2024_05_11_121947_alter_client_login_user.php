<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * envio das migrations relacionadas da tabela login para a tabela cliets para o banco de dados.
     */
    public function up(): void
    {
        Schema::table('client', function (Blueprint $table) {
            $table->string('password')->after('username')->constrained('login');
            $table->string('typeuser')->after('password')->default("defaul");
            $table->string('language')->after('typeuser')->default("en_US");
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
