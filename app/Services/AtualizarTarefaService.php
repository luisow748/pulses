<?php

namespace App\Services;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tarefa;
use App\Models\TipoDeTarefa;

class AtualizarTarefaService
{
    public function __construct(Request $request, $id)
    {
        DB::beginTransaction();
        $tarefaAtualizar = Tarefa::find($id);
        $tarefaAtualizar->descricao = $request->descricao;
        $tarefaAtualizar->data_limite = $request->data_limite;
        $tarefaAtualizar->status = $request->status;
        $tarefaAtualizar->tipo_de_tarefas_id = $request->tipo_de_tarefas_id;
            $tipo = TipoDeTarefa::find($request->tipo_de_tarefas_id);
        $tarefaAtualizar->tipo_de_tarefas = $tipo->nome;
        $tarefaAtualizar->save();
    DB::commit();
    return true;
    }
}
