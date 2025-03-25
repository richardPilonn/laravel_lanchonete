<?php

namespace App\Livewire\Cliente;

use App\Models\Cliente;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Livewire\Component;

use function Laravel\Prompts\password;

class Create extends Component
{

    public $nome, $endereco, $telefone, $cpf, $email, $password;

    protected $rules = [
        'nome' => 'required|string|max:100',
        'endereco' => 'required|string|max:150',
        'telefone' => 'required|string|max:17',
        'cpf' => 'required|string|unique:clients,cpf',
        'email' => 'required|email|unique:clients,email',
        'password' => 'required|string|min:6|max:255',
    ];

    public function store()
    {
        $this->validate();
        
        Cliente::create([
            'name' => $this->name,
            'address' => $this->address,
            'phone' => $this->phone,
            'cpf' => $this->cpf,
            'email' => $this->email,
            'password' => Hash::make($this->password)
        ]);
        session()->flash('sucess', 'Cliente cadastrado com sucesso!');
        $this->reset(); // Limpa os campos do formulário
    }




    public function render()
    {
        return view('livewire.cliente.create');
    }
}
