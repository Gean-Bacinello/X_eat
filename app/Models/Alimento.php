<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alimento extends Model
{
    protected $table = 'alimentos'; // Nome da tabela no banco
    protected $primaryKey = 'ID_Alimento'; // Chave primária
    protected $fillable = ['Nome_Alimento',
                            'Grupo_Alimentar',
                            'Energia_kcal',
                            'Carboidratos_g',
                            'Proteinas_g',
                            'Lipideos_g',
                            'Colesterol_mg',
                            'Fibra_Alimentar_g',
                            'Sodio_mg',
                            'Vitamina_B6_mg',
                            'Vitamina_D_ug',
                            'Calcio_mg',
                            'Ferro_mg',
                            'Potassio_mg',
                            'Acido_Folico_ug',
                            'Gorduras_Saturadas_g',
                            'Gorduras_Trans_g'];
    

 public function scopeBuscar($query, $search)
{
    return $query->where('Nome_Alimento', 'like', '%' . $search . '%')
                 ->orWhere('ID_Alimento', 'like', '%' . $search . '%')
                 ->orWhere('Grupo_Alimentar', 'like', '%' . $search . '%');
}

}

