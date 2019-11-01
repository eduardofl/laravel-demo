<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

use App\Fazenda;

class FazendasController extends Controller
{
    public function index() {
        $fazendas = ['Fazenda Esperança', 'Fazenda Santo Antônio', 'Fazenda do Seu Juarez'];

        $fazendas = Fazenda::all();
        return view('fazendas.index')->with('fazendas', $fazendas);
    }

    public function create() {
        return view('fazendas.criar');
    }

    public function store(Request $request) {
        // Valida os campos
        $validator = $request->validate(
            ['nome' => 'required'],
            ['cnpj' => 'required|formato_cnpj'],
            ['telefone' => 'required|telefone_com_ddd']
        );

        // Cria objeto Fazenda e salva no banco
        $fazenda = new Fazenda;
        $fazenda->CodFazenda = Uuid::uuid4()->toString();
        $fazenda->Nome = $request['nome'];
        $fazenda->CNPJ = $request['cnpj'];
        $fazenda->Telefone = $request['telefone'];
        $fazenda->save();

        return redirect('/fazendas')->with('success', 'Fazenda criada com sucesso!');
    }

    public function edit($id) {
        $fazenda = Fazenda::find($id);

        return view('fazenda.editar')->with('fazenda', $fazenda);
    }

    public function update(Request $request, $id) {
        $fazenda = Fazenda::find($id);

        //edita fazenda

        return redirect('/fazendas')->with('success', 'Fazenda atualizada!');
    }

    public function destroy($id) {
        $fazenda = Fazenda::find($id);
        $fazenda->delete();

        return redirect('/fazendas')->with('success', 'Fazenda excluída.');
    }
}
