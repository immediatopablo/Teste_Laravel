<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeradorCpfController;
use App\Http\Controllers\EnderecoController;

// Página inicial
Route::get('/', function () {
    return view('welcome');
});

// Gerador de CPF
Route::get('/gerar-cpf', [GeradorCpfController::class, 'gerar']); // Gera um CPF
Route::get('/listar-cpfs', [GeradorCpfController::class, 'listar']); // Lista os CPFs salvos

// Adicionar e Listar Endereços
Route::get('/adicionar-endereco', function () {
    return view('endereco'); // Exibe o formulário de endereço
});
Route::post('/adicionar-endereco', [EnderecoController::class, 'salvar']); // Salva o endereço
Route::get('/listar-enderecos', [EnderecoController::class, 'listar']); // Lista os endereços
