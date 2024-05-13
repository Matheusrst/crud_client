<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\login ;


class LoginController extends Controller
{
   
    public function index() //rota principal
    {
       return login::all();
    }

/**
 *  eviara as informaçoes para o banco de dados
 *
 * @author Matheus ribeiro <matheusriberomatheus@gmail.com>
 * @param Request $login
 * 
 */
    public function store(Request $login) //envio para o banco de dados
    {
        $login->validate([

            'client_fk'=>'required',
            'username'=> 'required',
            'password'=> 'required',
            'typeuser'=> 'required',
            'language'=> 'required',
            'tokenid'=> 'required',
            'user_active'=> 'required',

        ]);

        return login ::create($login->all());
    }

    public function show(string $id) //pesquisa pelo banco de dados
    {
        return login ::findOrFail($id);
    }

}