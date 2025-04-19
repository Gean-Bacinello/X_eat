<?php

namespace App\Http\Controllers;

use App\Models\Alimento;
use Illuminate\Http\Request;

class AlimentoController extends Controller
{
    // ===================[ CRUD - EXIBIR ]===================
    /**
     * Exibe os alimentos cadastrados no banco de dados
     * Com a função de pesquisa -> model -> Paciente.php
     * Paginação exibindo apenas 5 alimentos por pagina 
     *
     * @param Request $request
     * @return void
     */
    public function index(Request $request)
    {
        $alimentos = Alimento::when($request->filled('search'), function ($query) use ($request) {
            $query->buscar($request->search); // usa o scopeBuscar
        })->paginate(5)->appends($request->query()); // mantém o valor ao paginar
    
        return view('alimentos.index', ['alimentos' => $alimentos]);
    }
    
    // ===================[ CRUD - CRIAR ]===================
    /**
     * Rota para o metodo create
     * mostra o formulario de cadastro de alimento
     */
    public function create()
    {
        return view('alimentos.create');
    }


     // ===================[ CRUD - ARMAZENAR ]===================
    /**
     * Função Responsável por enviar o formulário de cadastro
    * armazena os dados do alimento no banco de dados 
     */
    public function store(Request $request)
    {
        $alimento = $request->except('_token');

        Alimento::create($alimento);

        return redirect('/alimentos')->with('msg', 'Alimento cadastrado com sucesso!');
    }

     // ===================[ CRUD - EXIBIR{ID} ]===================
    /**
     *  Exibe as informações de um alimento especifico pelo seu ID
     */
    public function show(int $id)
    {
        $alimento = Alimento::findOrFail($id); // Busca o alimento
        return view('alimentos.show',[
            'alimento' => $alimento
        ]);
    }

     // ===================[ CRUD - EDITAR ]===================
    /**
     * captura as informações salvas do formulario 
     * exibe as respectivas informações do alimento
     */
    public function edit(int $id)
    {
        $alimento = Alimento::find($id);

        return view('alimentos.edit', [
            'alimento' => $alimento
        ]);
    }

    // ===================[ CRUD - ATUALIZAR ]===================
    /**
     * Atualiza as informações do alimento através do formulário
     * ultiliza o id do alimento
     */
    public function update(Request $request, int $id)
    {
        $alimento = Alimento::find($id);
        $alimento->update($request->all());

        return redirect('/alimentos')->with('msg', 'Alimento editado com sucesso!');
    }

     // ===================[ CRUD - EXCLUIR ]===================
    /**
     * Exclui as informações do aliemnto atravez do formulario
     * ultiliza o id do alimento
     */
    public function destroy(int $id)
    {
        $alimento =  Alimento::find($id);

        $alimento->delete();

        return redirect('/alimentos');
    }
}
