<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;
use PHPUnit\Metadata\Uses;

class PacienteController extends Controller
{   
    // ===================[ CRUD - EXIBIR ]===================
    /**
     * Exibe os pacientes cadastrados no banco de dados
     * Com a função de pesquisa -> model -> Paciente.php
     * Paginação exibindo apenas 6 pacientes por pagina 
     * 
     * @param Request $request
     * @return void
     */
    public function index(Request $request)
    {
       $pacientes = Paciente::when($request->filled('search'), function ($query) use ($request){
        $query->buscar($request->search);
       })->paginate(6)->appends($request->query());

       return view('pacientes.index', [
        'pacientes' => $pacientes
       ]);
    }

    // ===================[ CRUD - CRIAR ]===================
    /**
     * Rota para o metodo create
     * mostra o formulario de cadastro de paciente
     *
     * @return void
     */
    public function create()
    {
        // return view('pacientes.create');
       return view('pacientes.create');

    }

    // ===================[ CRUD - ARMAZENAR ]===================
   /**
    * Função Responsável por enviar o formulário de cadastro
    * armazena os dados do paciente no banco de dados 
    *
    * @param Request $request
    * @return void
    */
    public function store(Request $request)
    {
        $paciente = $request->except('_token');
        Paciente::create($paciente);

        return redirect()->route('pacientes.index')->with('success', 'Paciente cadastrado com sucesso!');
    }

    // ===================[ CRUD - EXIBIR{ID} ]===================
    /**
     * Exibe as informações de um paciente 
     * ultiliza o id do paciente
     *
     * @param string $id
     * @return void
     */
    public function show(string $id)
    {
        // $paciente = Paciente::findOrFail($id);  //Busca a lista total de pacientes no banco
        // Busca o paciente com seu nutricionista associado usando eager loading
        $paciente = Paciente::with('nutricionista')->findOrFail($id); 
        return view('pacientes.show', [
            'paciente' => $paciente
        ]);
    }

    // ===================[ CRUD - EDITAR ]===================
    /**
     * captura as informações salvas do formulario 
     * exibe as respectivas informações do paciente
     */
    public function edit(string $id)
    {
        $paciente = Paciente::find($id);

        return view('pacientes.edit', [
            'paciente' => $paciente 
        ]);
    }

    // ===================[ CRUD - ATUALIZAR ]===================
    /**
     * Atualiza as informações do paciente através do formulário
     * ultiliza o id do paciente
     */
    public function update(Request $request, int $id)
    {
        $paciente = Paciente::find($id);
        $paciente->update($request->all());

        return redirect()->route('pacientes.index')->with('success', 'Paciente atualizado com sucesso!');
    }

    // ===================[ CRUD - EXCLUIR ]===================
    /**
     * Exclui as informações do paciente atravez do formulario
     * ultiliza o id do paciente
     */
    public function destroy(string $id)
    {
        $paciente = Paciente::findOrFail($id);
        $paciente->delete();

        return redirect()->route('pacientes.index')->with('success', 'Paciente excluido com sucesso!');
    }
}
