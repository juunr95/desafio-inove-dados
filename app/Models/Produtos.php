<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $fillable = ['empresa', 'nome', 'descricao', 'foto', 'estoque', 'valor'];
    use HasFactory;
}
