<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

use App\Fazenda;
use App\Animal;

class FazendasController extends Controller
{
    /**
     * Recupera todas fazendas
     *
     */
    public function index() {
        $fazendas = Fazenda::all();
        return view('fazendas.index')->with('fazendas', $fazendas);
    }

    /**
     * Retorna formulário de criação de fazenda
     *
     */
    public function create() {
        return view('fazendas.criar');
    }

    /**
     * Salva fazenda no banco
     *
     */
    public function store(Request $request) {
        // Valida os campos
        $request->validate([
            'nome' => 'required',
            'cnpj' => 'required|formato_cnpj',
            'telefone' => 'required|telefone_com_ddd'
        ]);

        // Cria objeto Fazenda e salva no banco
        $fazenda = new Fazenda;
        $fazenda->CodFazenda = Uuid::uuid4()->toString();
        $fazenda->Nome = $request['nome'];
        $fazenda->CNPJ = $request['cnpj'];
        $fazenda->Telefone = $request['telefone'];
        $fazenda->save();

        return redirect('/fazendas')->with('success', 'Fazenda criada com sucesso!');
    }

    /**
     * Recupera fazenda e a exibe numa view para o usuário.
     *
     */
    public function show($id) {
        $fazenda = Fazenda::find($id);
        $animais = Animal::where('CodFazenda', $id)->get();
        return view('fazendas.exibir')->with('fazenda', $fazenda)->with('animais', $animais);
    }

    /**
     * Recupera fazenda e a exibe num formulário de edição para o usuário.
     *
     */
    public function edit($id) {
        $fazenda = Fazenda::find($id);

        return view('fazendas.editar')->with('fazenda', $fazenda);
    }

    /**
     * Salva alterações da fazenda no banco
     *
     */
    public function update(Request $request, $id) {
        $fazenda = Fazenda::find($id);

        //edita fazenda

        return redirect('/fazendas')->with('success', 'Fazenda atualizada!');
    }

    /**
     * Deleta fazenda do banco
     *
     */
    public function destroy($id) {
        $fazenda = Fazenda::find($id);
        $fazenda->delete();

        return redirect('/fazendas')->with('success', 'Fazenda excluída.');
    }
}
