@extends('layouts.app')

@section('title', 'Listar Endereços')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Lista de Endereços</h1>

    @if($enderecos->isEmpty())
        <p class="text-gray-600">Nenhum endereço cadastrado.</p>
    @else
        <ul class="list-disc pl-5">
            @foreach($enderecos as $endereco)
                <li>{{ $endereco->endereco }}</li>
            @endforeach
        </ul>
    @endif
@endsection
