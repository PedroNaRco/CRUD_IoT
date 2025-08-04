<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class dispositivo extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'tipo', 'modelo', 'ativo'];
}
