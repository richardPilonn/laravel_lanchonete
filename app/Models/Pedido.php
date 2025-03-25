<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = [
        'cleinte_id',
        'data_hora',
        'valor_total',
        'valor_desconto',
        'forma_pagamento',
        'status'
    ];
}
