<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * envio das migrations do cliente para o banco de dados
     * 
     * @author Matheus ribeiro <matheusriberomatheus@gmail.com>
     */
    public function up(): void
    {
        Schema::create('client', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });
    }

    /**
     * devolução das migrations
     */
    public function down(): void
    {
        Schema::dropIfExists('client');
    }
};
