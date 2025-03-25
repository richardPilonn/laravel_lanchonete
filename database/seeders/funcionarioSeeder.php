<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class funcionarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Funcionario::create([
            'nome' => 'Funcionário Exemplo',
            'cpf' => '987.654.321-00',
            'email' => 'funcionario@exemplo.com',
            'password' => Hash::make(123456)
        ]);

    }
}
