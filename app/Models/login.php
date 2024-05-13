<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Model da tabela login
 * 
 * @author Matheus ribeiro <matheusriberomatheus@gmail.com> 
 */
class login extends Model

{
    use HasFactory;
    public function client()
    {
        return $this->hasMany(Client::class);
    }
    public function user()
    {
        return $this->hasMany(User::class);
    }
        
    protected $fillable = [
        'cliente_fk',
        'username',
        'password',
        'typeuser',
        'lenguage',,
    ];

}
 