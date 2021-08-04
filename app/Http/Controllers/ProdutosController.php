<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produtos;
use Illuminate\Support\Facades\DB;
use Auth;

class ProdutosController extends Controller
{
    public function index()
    {
        $produtos = DB::table('produtos')->where('empresa', Auth::user()->name)->get();

        return view('produtos.list', ['produtos' => $produtos]);
    }

    public function create()
    {
        return view('produtos.create', ['empresa' => Auth::user()->name]);
    }

    public function loadStore($id)
    {
        $produtos = DB::table('produtos')->where('empresa', "1")->get();

        return view('produtos.list', ['produtos' => $produtos]);
    }

    public function store(Request $request)
    {
        Produtos::create([
            'empresa'   => Auth::user()->name,
            'nome'      => $request->nome,
            'descricao' => $request->descricao,
            'foto'      => $request->foto,
            'estoque'   => $request->estoque,
            'valor'     => $request->valor,
        ]);

        return redirect('produtos/')->with('message', 'Produto criado com sucesso');
    }

    public function edit($id)
    {
        $produto = Produtos::findOrFail($id);

        return view('produtos.edit', ['produto' => $produto]);
    }

    public function update(Request $request, $id)
    {
        $produto = Produtos::findOrFail($id);
        $produto->update($request->all());

        return redirect('produtos/')->with('message', 'Produto atualizado com sucesso');
    }
}
