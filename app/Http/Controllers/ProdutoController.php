<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Produto;
use App\ProdCat;
use App\ProdSubCat;

class ProdutoController extends Controller
{
    
    public function index(){
        return view('404');
    }

    public function list($cat = null, $subCat = null){
        if($subCat == null && $cat != null){
            $produtos = Produto::where('cat', '=', $cat)->get();
            list($prodCat) = ProdCat::where('idCat', '=', $cat)->get();
            $prodSubCat = null;
        }
        else if($subCat != null){
            $produtos = Produto::where('subCat', '=', $subCat)->get();
            list($prodSubCat) = ProdSubCat::where('idSubCat', '=', $subCat)->get();
            list($prodCat) = ProdCat::where('idCat', '=', $cat)->get();
        }
        else{
            $produtos = Produto::all();
            $prodSubCat = null;
            $prodCat = null;
        }

        if($produtos == '[]'){
            return view('404');
        }

        return view('list-produtos', compact('produtos', 'prodCat', 'prodSubCat'));
    }

    public function create() {
        return view('include-produto');
    }

    public function store(Request $request) {
        $produto = new Produto;
        $produto->nome = $request->nome;
        $produto->val = $request->val;
        $produto->qtd = $request->qtd;
        $produto->peso = $request->peso;
        $produto->img = $request->img;
        $produto->img2 = $request->img2;
        $produto->img3 = $request->img3;
        $produto->cat = $request->cat;
        $produto->subCat = $request->subCat;
        $produto->mater = $request->mater;
        $produto->seg = $request->seg;
        $produto->des = $request->des;
        $produto->pedra = $request->pedra;
        $produto->acab = $request->acab;
        $produto->promoDesc = $request->promoDesc;
        $produto->promoPor = $request->promoPor;
        $produto->promoMsg = $promoMsg;
        $produto->save();
        return redirect()->route('produto.index')->with('message', 'Produto criado com sucesso!');
    }

    public function show($idProduto) {
        $produto = Produto::find($idProduto);
        if (!$produto){
            return view('404');
        }


        list($produto) = DB::table('Produto')->join('ProdCat', 'idCat', 'cat')->join('ProdSubCat', 'subCat', 'idSubCat')
                        ->select('Produto.*', 'ProdCat.nome as nCat', 'ProdSubCat.nome as nSubCat')
                        ->where('idProduto', '=', $idProduto)->get(); 
        return view('produto', compact('produto'));
    }

    public function edit($idProduto) {
        $produto = Produto::findOrFail($idProduto);
        return view('alter-produto', compact('produto'));
    }

    public function update(Request $request, $idProduto) {
        $produto = Produto::findOrFail($idProduto); 
        $produto->val = $request->val;
        $produto->qtd = $request->qtd;
        $produto->mater = $request->mater;
        $produto->des = $request->des;
        $produto->nome = $request->nome;
        $produto->cat = $request->cat;
        $produto->seg = $request->seg;
        $produto->save();
        return redirect()->route('produto.index')->with('message', 'Produto alterado com sucesso!');
    }

    public function destroy($idProduto) {
        $produto = Produto::findOrFail($idProduto);
        $produto->delete();
        return redirect()->route('produto.index')->with('message', 'Produto excluído com sucesso!');
    }

}
