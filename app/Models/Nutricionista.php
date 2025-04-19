<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nutricionista extends Model
{
    protected $table = "nutricionista";
    protected $primaryKey = "ID_Nutricionista";
    protected $fillable = ['Nome',
                           'Email',
                           'Senha',
                           'CFN',
                           'Telefone',
                           'Endereco'];
}
