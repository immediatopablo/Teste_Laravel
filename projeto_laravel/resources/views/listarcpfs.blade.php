@extends('layouts.app')

@section('title', 'Listar CPFs')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Lista de CPFs</h1>

    @if($cpfs->isEmpty())
        <p class="text-gray-600">Nenhum CPF cadastrado.</p>
    @else
        <ul class="list-disc pl-5">
            @foreach($cpfs as $cpf)
                <li>{{ $cpf->numero }}</li>
            @endforeach
        </ul>
    @endif
@endsection
