<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = 'paciente'; // Nome da tabela no banco
    protected $primaryKey = 'ID_Paciente'; // Chave primária

    protected $fillable = [
        'Nome',
        'Data_Nascimento',
        'Sexo',
        'Altura',
        'Peso',
        'Email',
        'Senha',
        'Nutricionista_ID',
    ];
}
