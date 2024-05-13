<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * envio das novas tabelas para a migration users no banco de dados
     * 
     * @author Matheus ribeiro <matheusriberomatheus@gmail.com>
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('username')->constrained('client');       
            $table->string('tokenid')->constrained('client');
            $table->string('user_active')->constrained('client');
        });
    }

    /**
     * devolução das migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
