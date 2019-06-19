<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
	protected $primaryKey = 'idProduto';
	protected $fillable = ['val', 'qtd', 'mater', 'des', 'nome', 'cat', 'seg', 'acab', 'peso'];
	protected $guarded = ['img2', 'img3', 'pedra', 'promoDesc', 'promoPor', 'promoMsg'];
	protected $table = 'Produto';
}
