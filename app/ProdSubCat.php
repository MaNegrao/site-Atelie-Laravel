<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdSubCat extends Model
{
    protected $primaryKey = 'idSubCat';
    protected $fillable = ['idCat', 'nome'];
    protected $table = 'ProdSubCat';
}
