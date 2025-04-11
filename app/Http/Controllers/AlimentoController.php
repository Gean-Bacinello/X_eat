<?php

namespace App\Http\Controllers;

use App\Models\Alimento;
use Illuminate\Http\Request;

class AlimentoController extends Controller
{
    public function index(Request $request)
    {
        $alimentos = Alimento::when($request->filled('search'), function ($query) use ($request) {
            $query->buscar($request->search); // usa o scopeBuscar
        })->paginate(5)->appends($request->query()); // mantém o valor ao paginar
    
        return view('alimentos.index', ['alimentos' => $alimentos]);
    }
    

    /**
     * Mostra o formulario de cadastro de  um alimento
     */
    public function create()
    {
        return view('alimentos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $alimento = $request->except('_token');

        Alimento::create($alimento);

        return redirect('/alimentos')->with('msg', 'Alimento cadastrado com sucesso!');
    }

    /**
     *  Mostra os detalhes de um cliente especifico
     */
    public function show(int $id)
    {
        $alimento = Alimento::findOrFail($id); // Busca o alimento
        return view('alimentos.show',[
            'alimento' => $alimento
        ]);
    }

    /**
     * Mostra o formulario de edição do Alimento
     */
    public function edit(int $id)
    {
        $alimento = Alimento::find($id);

        return view('alimentos.edit', [
            'alimento' => $alimento
        ]);
    }

    /**
     * Atualiza os dados do alimento no banco de dados
     */
    public function update(Request $request, int $id)
    {
        $alimento = Alimento::find($id);
        $alimento->update($request->all());

        return redirect('/alimentos')->with('msg', 'Alimento editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $alimento =  Alimento::find($id);

        $alimento->delete();

        return redirect('/alimentos');
    }
}
