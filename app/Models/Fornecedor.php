<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $table = 'fornecedores';
    
    protected $fillable = ['nome', 'email', 'telefone'];

    public function produtos()
    {
        return $this->hasMany(Produto::class);
    }
}