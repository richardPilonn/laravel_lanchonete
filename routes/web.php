<?php

use App\Livewire\Cliente\Create;
use App\Models\Cliente;
use Illuminate\Support\Facades\Route;

Route::get('/cliente', Create::class)->name('aluno.create');