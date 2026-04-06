<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fornecedor;

class FornecedorSeeder extends Seeder
{
    public function run(): void
    {
        Fornecedor::create([
            'nome' => 'DPS CASCAVEL',
            'email' => 'dps.cascavel@hotmail.com.com',
            'telefone' => '44999111222',
        ]);

        Fornecedor::create([
            'nome' => 'DPL TOLEDO',
            'email' => 'dpl.toledo@hotmail.com',
            'telefone' => '44999333444',
        ]);

        Fornecedor::create([
            'nome' => 'SCHERER CASCAVEL',
            'email' => 'scherer.cascavel@hotmail.com',
            'telefone' => '44999555666',
        ]);
         Fornecedor::create([
            'nome' => 'BIANCHI CASCAVEL',
            'email' => 'bianchi.cascavel@hotmail.com',
            'telefone' => '44999555666',
        ]);
         Fornecedor::create([
            'nome' => 'IMPARTS TOLEDO',
            'email' => 'imparts.toledo@hotmail.com',
            'telefone' => '44999555666',
        ]);
         Fornecedor::create([
            'nome' => 'EMPREPAR MARINGA',
            'email' => 'emprepar.maringa@hotmail.com',
            'telefone' => '44999555666',
        ]);

    }
}