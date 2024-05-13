<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as login;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use app\models\login\User as loginUser;

class User extends login
{
    use HasFactory, Notifiable, HasApiTokens;
    use HasApiTokens, HasFactory, Notifiable;

    public function client()
    {
        return $this->hasMany(Client::class);
    }
    public function logins()
    {
       return $this->hasMany(Login::class);
    }


    /**
     *@author Matheus ribeiro <matheusriberomatheus@gmail.com>
     * 
     * model da tabela user
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'tokenid',
        'user_active',
    ];

    /**
     * Os atributos que devem ser ocultados para serialização.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'tokenid',
    ];

    /**
     * Os atributos que devem ser convertidos.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
