@extends('layouts.app')

@section('title', 'Adicionar Endereço')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Adicionar Endereço</h1>

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form action="/adicionar-endereco" method="POST">
        @csrf
        <div class="mb-4">
            <label for="endereco" class="block text-sm font-medium text-gray-700">Endereço:</label>
            <input type="text" id="endereco" name="endereco" required
                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-green-500 focus:ring-green-500 sm:text-sm">
        </div>
        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded-md hover:bg-green-700">
            Salvar Endereço
        </button>
    </form>
@endsection
