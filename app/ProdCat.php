<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdCat extends Model
{
    protected $primaryKey = 'idCat';
    protected $fillable = ['nome'];
    protected $table = 'ProdCat';
}
