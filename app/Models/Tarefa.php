<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TipoDeTarefa;

class Tarefa extends Model
{
    use HasFactory;
    protected $fillable = ['descricao', 'data_limite',
    'tipo_de_tarefas', 'tipo_de_tarefas_id', 'status'];
    public function tipodetarefas()
    {
        return $this->belongsTo(TipoDeTarefa::class);
    }
}
