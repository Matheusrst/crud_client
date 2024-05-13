<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * model da tabela client
 * 
 * @author Matheus ribeiro <matheusriberomatheus@gmail.com>
 */
class client extends Model
{
  public function logins()
  {
     return $this->hasMany(Login::class);
  }
  
  public function user()
  {
      return $this->hasMany(User::class);
  }

  protected $table = 'client';
  protected $fillable = [
    'name',
];

}