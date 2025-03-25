<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class clienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    \App\Models\Cliente::create([
        'nome' => 'Cliente Exemplo',
        'endereco' => 'Rua Exemplo, 123',
        'telefone' => '123456789',
        'cpf' => '123.456.789-00',
        'email' => 'cliente@exemplo.com',
        'password' => Hash::make(123456)
    ]);
}
}
