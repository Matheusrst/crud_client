<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;





route::get('/cliente', [ClientController::class,'index']); //rota principal
route::post('/cliente',[ClientController::class,'store']); // enviar para o banco de dados
route::get('/cliente/($id)', [ClientController::class,'show']); //pesquisa pelo $id
