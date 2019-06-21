<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Produto;

class ProdutoController extends Controller
{
    
    public function index(){
        return view('404');
    }


    public function list($cat = null, $subCat = null){
        if($subCat == null && $cat != null){
            $produtos = Produto::where('cat', '=', '$cat')->get();
        }
        else if($subCat != null){
            $produtos = Produto::where('subCat', '=', '$subcat')->get();
        }
        else
            $produtos = Produto::all();
    	return view('list-produtos', compact('produtos'));
    }

    public function create() {
        return view('include-produto');
    }

    public function store(Request $request) {
        $produto = new Produto;
        $produto->val = $request->val;
        $produto->qtd = $request->qtd;
        $produto->mater = $request->mater;
        $produto->des = $request->des;
        $produto->pedra = $request->pedra;
        $produto->nome = $request->nome;
        $produto->cat = $request->cat;
        $produto->img = $request->img;
        $produto->seg = $request->seg;
        $produto->acab = $request->acab;
        $produto->desVal = $request->desVal;
        $produto->desPor = ($request->desVal * 100) / $request->val;
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
