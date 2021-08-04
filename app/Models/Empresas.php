<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresas extends Model
{
    protected $fillable = ['nome', 'razaosocial', 'cnpj', 'email', 'senha', 'cep', 'rua', 'bairro', 'numero', 'complemento',
                           'cidade', 'estado', 'cep', 'telefone'];
    
    use HasFactory;
}
