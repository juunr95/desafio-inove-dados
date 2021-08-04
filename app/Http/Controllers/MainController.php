<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produtos;

use DB;

class MainController extends Controller
{
    public function index()
    {
        $items = DB::table('empresas')->get();

        return view('welcome', ['items' => $items]);
    }

    public function LoadCompanyShop($name)
    {
        $items = DB::table('produtos')->where('empresa', $name)->get();

        return view('shop', ['items' => $items]);
    }

    public function BuyProduct($id)
    {
        $item = Produtos::findOrFail($id);

        return view('buy', ['item' => $item]);
    }

    public function FinishBuyProduct(Request $request)
    {
        dd($request->all());
    }
}
