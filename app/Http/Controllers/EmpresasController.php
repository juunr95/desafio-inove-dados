<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Role;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\Empresas;
use App\Models\User;
use App\Enums\UserType;

use Auth;
use Hash;

class EmpresasController extends Controller
{
    public function index()
    {
        $empresas = Empresas::all();

        return view('empresas.list', ['empresas' => $empresas]);
    }

    public function create()
    {
        return view('empresas.create');
    }

    public function store(Request $request)
    {
        $exist = Empresas::find($request->cnpj);

        if($exist !== null)
        {
            return "Ja existe uma empresa com este CNPJ";
        }

        $exist = Empresas::find($request->email);

        if($exist !== null)
        {
            return "Ja existe uma empresa com este email";
        }

        Empresas::create([
            'nome' => $request->nome,
            'razaosocial' => $request->razaosocial,
            'cnpj' => $request->cnpj,
            'email' => $request->email,
            'senha' => $request->senha,
            'cep' => $request->cep,
            'rua' => $request->rua,
            'bairro' => $request->bairro,
            'numero' => $request->numero,
            'complemento' => $request->complemento,
            'cidade' => $request->cidade,
            'estado' => $request->estado,
            'telefone' => $request->telefone
        ]);

        $hashedpass = Hash::make($request->senha);

        $user = User::create([
            'name' => $request->nome,
            'email' => $request->email,
            'password' => $hashedpass
        ]);

        $user->assignRole('company');

        return redirect('empresas/')->with('message', 'Empresa cadastrada com sucesso');
    }

    public function buscaCEP($cep)
    {
        $header = new Client([
            'headers' => [
                'Content-Type' => 'application/json',
                'Accept' => 'application/json'
            ]
        ]);

        try
        {
            $response = $header->get("https://viacep.com.br/ws/{$cep}/json/unicode");
        }
        catch(\Exception $e)
        {
            return response([
                'message' => $e->getMessage(),
                'code' => $e->getCode()
            ], 422);
        }

        return response([json_decode((string)$response->getBody(), true)], $response->getStatusCode());
    }

    public function edit($id)
    {
        $empresa = Empresas::findOrFail($id);

        return view('empresas.edit', ['empresa' => $empresa]);
    }

    public function update(Request $request, $id)
    {
        $empresa = Empresas::findOrFail($id);
        $empresa->update($request->all());

        return redirect('empresas/')->with('message', 'Empresa atualizada com sucesso');
    }

    public function destroy($id)
    {
        $empresa = Empresas::findOrFail($id);
        $empresa->delete();

        return redirect('empresas/')->with('message', 'Empresa excluida com sucesso');
    }
}
