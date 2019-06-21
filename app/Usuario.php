<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;  

class Usuario extends Authenticatable
{
    use Notifiable;
    protected $primaryKey = 'idUsuario';
    protected $fillable = ['nome', 'cpf', 'email', 'senha', 'dtNasc','cel', 'sexo'];
    protected $table = "Usuario";
    protected $hidden = 'senha';

    public $timestamps = false;
}
