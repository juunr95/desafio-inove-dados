<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;
use Auth;
use Hash;
use App\Models\User;
use App\Enums\UserType;

use Illuminate\Database\Eloquent\ModelNotFoundException;

use DB;

class ClientesController extends Controller
{
    public function index()
    {
        $users = DB::table('clientes')->get();

        return view('clientes.list', ['clientes' => $users]);
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        $find = DB::table('clientes')->where('cpf', $request->cpf)->get();

        if($find)
        {
            return "Usuario ja cadastrado";
        }

        $emailfind = DB::table('clientes')->where('email', $request->email)->get();

        if($find)
        {
            return "Usuario ja cadastrado";
        }

        Clientes::create([
            'nome'          => $request->nome,
            'sobrenome'     => $request->sobrenome,
            'cpf'           => $request->cpf,
            'email'         => $request->email,
            'senha'         => $request->senha,
            'saldo'         => 1000.0,
        ]);

        $user = User::create([
            'name' =>       $request->nome,
            'email' =>      $request->email,
            'password' =>   Hash::make($request->senha)
        ]);

        $user->assignRole('user');

        return redirect('clientes/')->with('message', 'Cliente cadastrado com sucesso');
    }

    public function update(Request $request, $id)
    {
        $cliente = Clientes::findOrFail($id);
        $cliente->update($request->all());

        return redirect('clientes/')->with('message', 'Cliente atualizado com sucesso.');
    }

    public function destroy($id)
    {
        $cliente = Clientes::findOrFail($id);
        $cliente->delete();

        return redirect('clientes/')->with('message', 'Cliente excluido com sucesso.');
    }

    public function edit($id)
    {
        $cliente = Clientes::findOrFail($id);
        $cliente->all();

        return view('clientes.edit', ['cliente' => $cliente]);
    }
}
