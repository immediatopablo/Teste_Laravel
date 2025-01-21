@extends('layouts.app')

@section('title', 'Gerar CPF')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Gerar CPF</h1>

    @if(isset($cpf))
        <div class="bg-green-100 border border-green-500 text-green-700 px-4 py-3 rounded relative mb-4">
            <strong>CPF Gerado:</strong> {{ $cpf }}
        </div>
    @endif

    <a href="/gerar-cpf" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
        Gerar Outro CPF
    </a>
@endsection
