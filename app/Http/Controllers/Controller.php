<?php

namespace App\Http\Controllers;

use App\Produto;
use App\Slider;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index(){
    	$sliders = Slider::where('page', '=', 'index')->get();
    	list($proDesc) = DB::table('Produto')
    						->select('nome', 'img','promoPor', 'promoMsg', 'idProduto')
    						->orderBy('promoPor', 'desc')->limit(1)->get();
    	$promoBanner = (DB::table('Produto')
    						->select('nome', 'img', 'idProduto', 'promoPor', 'promoMsg', 'seg')
    						->orderBy('qtd')->limit(2)->get())->merge(DB::table('Produto')
    						->select('nome', 'img', 'idProduto', 'promoPor', 'promoMsg', 'seg')
    						->orderBy('idProduto', 'desc')->limit(2)->get());
    	return view('index', compact('sliders', 'proDesc', 'promoBanner'));
    	
    }
}
