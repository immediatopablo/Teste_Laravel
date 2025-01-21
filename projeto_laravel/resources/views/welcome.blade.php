@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="text-center">
        <h1 class="text-4xl font-bold mb-4">Bem-vindo ao Meu Site Laravel</h1>
        <p class="mb-8">Escolha uma opção no menu acima para navegar.</p>
        <div class="space-x-4">
            <a href="/gerar-cpf" class="px-6 py-3 bg-green-700 text-white rounded-lg shadow-md hover:bg-green-800">
                Gerar CPF
            </a>
            <a href="/adicionar-endereco" class="px-6 py-3 bg-green-700 text-white rounded-lg shadow-md hover:bg-green-800">
                Adicionar Endereço
            </a>
        </div>
    </div>
@endsection
