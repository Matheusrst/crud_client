<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ClientCreateRequest;
use App\Models\Client ;

class ClientController extends Controller
{
   
    public function index() //rota principal
    {
       return Client::all();
    }

/**
 *  eviara as informaçoes para o banco de dados
 *
 * @author Matheus ribeiro <matheusriberomatheus@gmail.com>
 * @param Request $request
 * 
 */
    public function store(ClientCreateRequest $request) //enviar para o banco de dados
    {
       
        return Client ::create($request->all());
        
    }

    public function show(string $id) //pesquisa pelo banco de dados
    {
        return Client ::findOrFail($id);
    }

    public function update(ClientCreateRequest $request, string $id) {

    $uptade = $this->$request->update($id, $request);
    return $uptade;
    }

}