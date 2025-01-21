<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Endereco;

class EnderecoController extends Controller
{
    public function salvar(Request $request)
    {
        // Valida o endereço
        $request->validate([
            'endereco' => 'required|max:255',
        ]);

        // Salva o endereço no banco de dados
        Endereco::create([
            'endereco' => $request->input('endereco'),
        ]);

        // Redireciona com mensagem de sucesso
        return redirect('/adicionar-endereco')->with('success', 'Endereço salvo com sucesso!');
    }

    public function listar()
    {
    // Recupera todos os endereços do banco de dados
    $enderecos = Endereco::all();

    // Retorna a view com os endereços
    return view('listarenderecos', compact('enderecos'));
    }

}
