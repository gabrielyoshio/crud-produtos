<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produto;

class ProdutoSeeder extends Seeder
{
    public function run(): void
    {
        Produto::create([
            'nome' => 'Correia Dentada gol at/power 8v 1.0/1.6',
            'descricao' => 'Correia Dentada gol at/power 8v 1.0/1.6, MARCA:GATES, COD FABRICA: 5429XS',
            'preco' => 43.75,
            'estoque' => 10,
            'fornecedor_id' => 1,
        ]);

        Produto::create([
            'nome' => 'Pastilha de Freio',
            'descricao' => 'Pastilha de freio dianteira gol/sav/parati voyage, MARCA:SYL, COD FABRICA:SYL1086',
            'preco' => 22.50,
            'estoque' => 30,
            'fornecedor_id' => 2,
        ]);

        Produto::create([
            'nome' => 'Filtro oleo motor ap',
            'descricao' => 'filtro oleo motor ap todos 1.6/1.8/2.0, MARCA:WIX, COD FABRICA:WL7319',
            'preco' => 12.00,
            'estoque' => 30,
            'fornecedor_id' => 3,
        ]);
        Produto::create([
            'nome' => 'Jogo junta superior astra/vectra 1.8/2.0 8v',
            'descricao' => 'Jogo de juntas superiores para astra/vectra 1.8/2.0 8v, MARCA:SABO, COD FABRICA:79103',
            'preco' => 96.65,
            'estoque' => 30,
            'fornecedor_id' => 4,
        ]);
        Produto::create([
            'nome' => 'Junta homocinetica gol/sav/parati/voyage 1.6/1.8/2.0 eixo grosso',
            'descricao' => 'Junta homocinetica gol/sav/parati/voyage 1.6/1.8/2.0 eixo grosso, MARCA:COFAP, COD FABRICA:JHC01105',
            'preco' => 96.00,
            'estoque' => 30,
            'fornecedor_id' => 5,
        ]);
        Produto::create([
            'nome' => 'Valvula termostatica zetec flex 1.0 e 1.6',
            'descricao' => 'Valvula termostatica zetec flex 1.0 e 1.6, MARCA:MTE, COD FABRICA:VT525.100',
            'preco' => 198.00,
            'estoque' => 30,
            'fornecedor_id' => 6,
        ]);
    }
}