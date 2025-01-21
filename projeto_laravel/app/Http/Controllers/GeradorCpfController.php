<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cpf; // Certifique-se de que o modelo Cpf está configurado

class GeradorCpfController extends Controller
{
    public function gerar()
    {
        $numero = '';
        for ($i = 0; $i < 9; $i++) {
            $numero .= mt_rand(0, 9);
        }

        // Calcula o primeiro dígito verificador
        $soma = 0;
        for ($i = 0; $i < 9; $i++) {
            $soma += $numero[$i] * (10 - $i);
        }
        $resto = $soma % 11;
        $dv1 = ($resto < 2) ? 0 : 11 - $resto;

        // Adiciona o primeiro dígito ao número
        $numero .= $dv1;

        // Calcula o segundo dígito verificador
        $soma = 0;
        for ($i = 0; $i < 10; $i++) {
            $soma += $numero[$i] * (11 - $i);
        }
        $resto = $soma % 11;
        $dv2 = ($resto < 2) ? 0 : 11 - $resto;

        // Adiciona o segundo dígito ao número
        $numero .= $dv2;

        // Salva no banco de dados
        $cpf = new Cpf();
        $cpf->numero = $numero;
        $cpf->save();

        // Retorna a view com o CPF gerado
        return view('gerarcpf', ['cpf' => $numero]);
    }

    public function listar()
    {
        // Recupera todos os CPFs do banco de dados
        $cpfs = Cpf::all();

        // Retorna a view com os CPFs
        return view('listarcpfs', compact('cpfs'));
    }
}
