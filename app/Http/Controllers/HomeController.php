<?php

namespace App\Http\Controllers;

use App\Produto;
use App\Slider;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
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
