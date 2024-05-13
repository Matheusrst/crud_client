<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * envio das migrations de login para o banco de dados
     *
     * @author Matheus ribeiro <matheusriberomatheus@gmail.com>
     * @return void
     */
    public function up(): void
    {
        Schema::create('login', function (Blueprint $table) {
            $table->id();
            $table->string('client_fk')->truncate();
            $table->string('username');
            $table->string('password');
            $table->string('typeuser')->default("defaul");
            $table->string('language')->default('en-US');
            $table->timestamps();
        });
    }

    /**
     * devolução das migrations
     */
    public function down(): void
    {
        Schema::dropIfExists('login');
    }
};
