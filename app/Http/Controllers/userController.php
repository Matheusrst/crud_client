<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\login ;
use App\Models\user ;
use app\Models\client;


class userController extends Controller
{
   
    public function index() //rota principal
    {
       return user::all();
    }

/**
 *  eviara as informaçoes para o banco de dados
 *
 * @author Matheus ribeiro <matheusriberomatheus@gmail.com>
 * @param Request $user
 * 
 */
    public function store(Request $user) //envio para o banco de dados
    {
        $user->validate([
            'name'=> 'required',
            'username'=> 'required',
            'email'=> 'required',
            'password'=> 'required',
            'tokenid'=> 'required',   
            'user_active'=> 'required',
            'remember_token'=> 'required',
            'email_verified_at'=> 'required',

        ]);

        return login ::create($user->all());
    }

    public function show(string $id) //pesquisa pelo banco de dados
    {
        return login ::findOrFail($id);
    }

}