<?php
// Esse arquivo foi criado com o comando --> php artisan make:model Aluno -m

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $table = "alunos";

    protected $fillable = [
        'nome',
        'cpf',
        'telefone'
    ];
}