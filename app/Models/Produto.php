<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['nome', 'descricao', 'preco', 'estoque', 'fornecedor_id'];

    public function fornecedor()
    {
        return $this->belongsTo(Fornecedor::class);
    }
}