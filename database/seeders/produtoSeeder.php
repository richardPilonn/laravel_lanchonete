<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class produtoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Produto::create([
            'nome' => 'Hambúrguer',
            'ingredientes' => 'Carne, queijo, alface, tomate',
            'valor' => 15.00,
        ]);
    
        \App\Models\Produto::create([
            'nome' => 'Refrigerante',
            'ingredientes' => 'Refrigerante sabor cola',
            'valor' => 5.00,
        ]);
    }
}
