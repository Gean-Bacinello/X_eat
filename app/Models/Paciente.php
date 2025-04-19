<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

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


// Mutator para criptografar a senha antes de salvar no banco de dados
public function setSenhaAttribute($value)
{
    $this->attributes['Senha'] = Hash::make($value);
}

public function scopeBuscar($query, $search)
{
        return $query->where('Nome', 'like', '%' . $search . '%')
                     ->orWhere('Email', 'like', '%' . $search . '%');
 }


public function nutricionista()
{
    return $this->belongsTo(Nutricionista::class, 'Nutricionista_ID');
}

}
